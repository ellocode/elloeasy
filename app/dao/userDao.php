<?php
namespace App\DAO;
use Setup\DB\DBConnect;
use App\Models\User;

class UserDAO{

    public static function add(User $user){
       $sql="INSERT INTO users(
       name,
       email,
       username,
       password,
       active,
       creationDate,
       remember,
       changePassword
       )
        VALUES (
            :name,
            :email,
            :username,
            :password,
            :active,
            :creationDate,
            :remember,
            :changePassword
        )";

        try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->bindValue(":name", $user->getName());
            $stmt->bindValue(":email", $user->getEmail());
            $stmt->bindValue(":username", $user->getUsername());
            $stmt->bindValue(":password", $user->getPassword());
            $stmt->bindValue(":active", $user->getActive());
            $stmt->bindValue(":creationDate", $user->getCreationDate());
            $stmt->bindValue(":remember", $user->getRemember());
            $stmt->bindValue(":changePassword", $user->getChangePassword());
            $stmt->execute();
            print_r($stmt->rowCount()); 

        } catch (\PDOException $e){
           
            print_r($e->getMessage());
        }
    }
    public static function getAll(Type $var = null){
        $sql="SELECT id,name,email,username,password,active,creationDate,remember,changePassword 
        FROM users";
        try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->execute();
            $stmt=$stmt->fetchAll(\PDO::FETCH_ASSOC);

        } catch (\PDOException $e){
           
            print_r($e->getMessage());
        }
    }
    public static function getById($id){
        $sql="SELECT id,name,email,username,password,active,remember,changePassword
        FROM users WHERE id =:id";
        try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $stmt=$stmt->fetch(\PDO::FETCH_ASSOC);
            print_r($stmt);
        } catch (\PDOException $e){
           
            print_r($e->getMessage());
        }
    }
    public static function getByUsernameAndPassword($username,$password){
        $sql="SELECT id,name,email,username,password,active,creationDate,remember,changePassword
        FROM users WHERE username =:username AND password=:password";
        try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->bindValue(":username", $username);
            $stmt->bindValue(":password", $password);
            $stmt->execute();
            $stmt=$stmt->fetch(\PDO::FETCH_ASSOC);
            print_r($stmt);
        } catch (\PDOException $e){
           
            print_r($e->getMessage());
        }
    }
    public static function update(User $user){
        $sql="UPDATE users
        SET
        name = :name,
        email = :email,
        username = :username,
        password = :password,
        active = :active,
        remember=:remember,
        changePassword=:changePassword
        WHERE id = :id";

       try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->bindValue(":id", $user->getId());
            $stmt->bindValue(":name", $user->getName());
            $stmt->bindValue(":email", $user->getEmail());
            $stmt->bindValue(":username", $user->getUsername());
            $stmt->bindValue(":password", $user->getPassword());
            $stmt->bindValue(":active", $user->getActive());
            $stmt->bindValue(":remember", $user->getRemember());
            $stmt->bindValue(":changePassword", $user->getChangePassword());
            $stmt->execute();
         } 
         catch (\PDOException $e)
         {
            print_r($e->getMessage());
         }
    }
    public static function updatePassword(User $user){
        $sql="UPDATE users
        SET
        password = :password,
        WHERE id = :id";

       try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->bindValue(":id", $user->getId());
            $stmt->bindValue(":password", $user->getPassword());
            $stmt->execute();
         } 
         catch (\PDOException $e)
         {
            print_r($e->getMessage());
         }
    }
    public static function updateActiveInative(User $user){
        $sql="UPDATE users
        SET
        active = :active,
        WHERE id = :id";

       try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->bindValue(":id", $user->getId());
            $stmt->bindValue(":active", $user->getActive());
            $stmt->execute();
         } 
         catch (\PDOException $e)
         {
            print_r($e->getMessage());
         }
    }
    public static function updateRememberPassword(User $user){
        $sql="UPDATE users
        SET
        remember = :remember,
        WHERE id = :id";

       try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->bindValue(":id", $user->getId());
            $stmt->bindValue(":remember", $user->getRemember());
            $stmt->execute();
         } 
         catch (\PDOException $e)
         {
            print_r($e->getMessage());
         }
    }
    public static function updateForcePasswordChange(User $user){
        $sql="UPDATE users
        SET
        remember = :remember,
        WHERE id = :id";

       try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->bindValue(":id", $user->getId());
            $stmt->bindValue(":changePassword", $user->getChangePassword());
            $stmt->execute();
         } 
         catch (\PDOException $e)
         {
            print_r($e->getMessage());
         }
    }
    public static function delete($id){
        $sql="DELETE FROM users WHERE id=:id";
        try {
            $stmt=DBConnect::getConnection()->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $stmt=$stmt->fetch(\PDO::FETCH_ASSOC);
            print_r($stmt);
        } catch (\PDOException $e){
           
            print_r($e->getMessage());
        }
    }
}
?>