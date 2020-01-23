<?php
/**
 * Created by PhpStorm.
 * User: Игорь
 * Date: 10/10/2019
 * Time: 15:31
 */

class StudentModel extends Model
{

    private $id;
    private $name;
    private $surname;
    private $middleName;
    private $birthday;


    public function __construct($id = null, $name = null, $surname = null, $middleName = null, $birthday = null)
    {
        parent::__construct();
        $this->name = $name;
        $this->surname = $surname;
        $this->middleName = $middleName;
        $this->birthday = $birthday;
        $this->id = $id;

    }


    public function getStudent($id)
    {


        try {
            $sql = "SELECT * FROM students WHERE id = :studentID";
            $stmt = parent::$db->prepare($sql);
            $stmt->bindParam(':studentID', $id, PDO::PARAM_INT);
            $stmt->execute();
            $student = $stmt->fetch(PDO::FETCH_ASSOC);
            return $student;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }


    }


    public function updateStudent($student)
    {

        $birthday = new DateTime($student->birthday);
        $age = intval($birthday->diff(new DateTime)->y);

        try {
            $sql = "UPDATE students SET
                    name = :name,
                    surname = :surname, 
                    middlename = :middlename, 
                    birthday = :birthday,
                    age = :age WHERE id = :id";

            $stmt = parent::$db->prepare($sql);
            $stmt->bindParam(':name', $student->name, PDO::PARAM_STR);
            $stmt->bindParam(':surname', $student->surname, PDO::PARAM_STR);
            $stmt->bindParam(':middlename', $student->middleName, PDO::PARAM_STR);
            $stmt->bindParam(':birthday', $student->birthday, PDO::PARAM_STR);
            $stmt->bindParam(':id', $student->id, PDO::PARAM_INT);
            $stmt->bindParam(':age', $age, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }


    public function deleteStudent($id)
    {
        try {
            $sql = "DELETE FROM students WHERE id = :studentID";
            $stmt = parent::$db->prepare($sql);
            $stmt->bindParam(':studentID', $id, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


    public function addStudent($student)
    {
        $birthday = new DateTime($student->birthday);
        $age = intval($birthday->diff(new DateTime)->y);

        try {
            $sql = "INSERT INTO students (name, surname, middlename, birthday, age) VALUES (:name, :surname, :middlename, :birthday, :age)";
            $stmt = parent::$db->prepare($sql);
            $stmt->bindParam(':name', $student->name, PDO::PARAM_STR);
            $stmt->bindParam(':surname', $student->surname, PDO::PARAM_STR);
            $stmt->bindParam(':middlename', $student->middleName, PDO::PARAM_STR);
            $stmt->bindParam(':birthday', $student->birthday, PDO::PARAM_STR);
            $stmt->bindParam(':age', $age, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param mixed $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}