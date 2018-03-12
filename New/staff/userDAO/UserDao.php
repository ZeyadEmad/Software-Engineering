<?php

require_once 'BaseDao.php';

/**
 * User DAO Class - Objects are meant to act as Data Access Objects. 
 * Performs select, insert, update & delete operations upon 'users' table.
 * Inherits form BaseDao class.
 */
class UserDao {

    private $db;
    private $_Conn;

    public function __construct() {

        /* $this->db = BaseDao::getInstance();
          $this->$_Conn=$this->db->getConnection();

          if($_Conn)
          {

          echo "fe connection";
          } */
    }

   public function SelectCompanyWorkLines($Cid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_Date = date('Y-m-d');
        $_SQL = 'SELECT * FROM company_line WHERE c_id=:_cid AND DATE(date)=:_date AND woekdtoady=0';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $Cid);
        $_Statment->bindParam(':_date', $_Date);
        $_Statment->execute();
        $users_arr = $_Statment->fetchAll();
        return $users_arr;
    }

       public function SelectCompanyProf($Cid,$Type) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM company_line WHERE user_id=:_cid AND type=:_type ';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $Cid);
        $_Statment->bindParam(':_type', $Type);
        $_Statment->execute();
        $users_arr = $_Statment->fetchAll();
        return $users_arr;
    }
  public function SelectLinesData($Cid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();

        $_SQL = 'SELECT * FROM company_line WHERE line_id=:_cid AND woekdtoady=1';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $Cid);
        $_Statment->execute();
        $users_arr = $_Statment->fetchAll();
        return $users_arr;
    }

   public function SelectCarLinesCompany()
    {
        $_db= BaseDao::getInstance();
        $_Conn=$_db->getConnection();
        $_SQL='SELECT * FROM cars WHERE rented=0';
        $_CarsArray=array();
        $_Statment=$_Conn->prepare($_SQL);
        $_Statment->execute();
        $_Statment->fetch();
        while($row=$_Statment->fetch())
        {
            $_CarsArray[]=array('id'=>$row['id'],'palte'=>$row['plate']);
        }
        return $_CarsArray;
        
    }
    public function get($useremail) {
        $statement = $this->db->prepare("SELECT * FROM users WHERE useremail = :useremail LIMIT 1 ");
        $statement->bindParam(':useremail', $useremail);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            return $statement->fetch();
        }

        return false;
    }

    public function Delete($_Tablename, $_ColNameID) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'DELETE FROM ' . $_Tablename . ' WHERE id=:_id';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_id', $_ColNameID);
        $_Statment->execute();
    }

    public function SelectGasType($_Type) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM gas WHERE type=:_Type';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_Type', $_Type);
        $_Statment->execute();
        $_Answer = $_Statment->fetch();
        return $_Answer;
    }

    public function insert($TableName, array $values) {


        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'INSERT INTO ' . $TableName;
        $fields = array_keys($values);
        $vals = array_values($values);

        $sql .= '(' . implode(',', $fields) . ') ';

        $arr = array();
        foreach ($fields as $f) {
            $arr[] = '?';
        }
        $sql .= 'VALUES (' . implode(',', $arr) . ') ';

        $statement = $_Conn->prepare($sql);
        foreach ($vals as $i => $v) {
            $statement->bindValue($i + 1, $v);
        }

        return $statement->execute();
    }

    public function InsertEMPPages($_EMPID, $_Privliges) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'INSERT INTO pages_emp (empid,pageid) VALUES(:_empid,:_privilage)';
        for ($i = 0; $i < count($_Privliges); $i++) {
            $_Statment = $_Conn->prepare($_SQL);
            $_Statment->bindParam(':_empid', $_EMPID[0]);
            $_Statment->bindParam(':_privilage', $_Privliges[$i]);
            $_Statment->execute();
        }
    }

    public function SelectAll($_TableName) {

        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM ' . $_TableName;
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->execute();
        $_Result = array();
        $i = 0;
        while ($_Row = $_Statment->fetch()) {
            $_Result[$i] = $_Row;
            $i++;
        }
        return $_Result;
    }
  
  
   public function SelectAllCar($_TableName) {

        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM ' . $_TableName.' WHERE workedToday = 0';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->execute();
        $_Result = array();
        $i = 0;
        while ($_Row = $_Statment->fetch()) {
            $_Result[$i] = $_Row;
            $i++;
        }
        return $_Result;
    }
  
    public function SelectCompanyLines($Cid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM comp_line WHERE cid=:_cid';
        $_Statment=$_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $Cid);
        $_Statment->execute();
        $users_arr = array();

        while ($row = $_Statment->fetch()) {

            $users_arr[] = array("Lid" => $row['id'],"linename"=>$row['line_name']);
        }
        return $users_arr;
    }

    public function SelectUnRantedCars() {

        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM cars WHERE rented=0';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->execute();
        $_Result = array();
        $i = 0;
        while ($_Row = $_Statment->fetch()) {
            $_Result[$i] = $_Row;
            $i++;
        }
        return $_Result;
    }

    public function SelectUsers($Cid) {

        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM user WHERE comp_id=:_Cid';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_Cid', $Cid);
        $_Statment->execute();
        $_Result = array();
        $i=0;
        while ($_Row = $_Statment->fetch()) {
            $_Result[$i] = 			                				array('id'=>$_Row['id'],'name'=>$_Row['name'],'carid'=>$_Row['carid'],'compid'=>$_Row['comp_id'],'startdate'=>$_Row['startdate'],'enddate'=>$_Row['enddate']);
            $i++;
        }
        return $_Result;
    }

    public function SelectUsersName($Cid) {

        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM user WHERE comp_id=:_cid';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $Cid);
        $_Statment->execute();

        $users_arr = array();
        while ($row = $_Statment->fetch()) {
            $userid = $row['id'];
            $name = $row['name'];
            $carid = $this->Select('cars', $row['carid']);
            $users_arr[] = array("id" => $userid, "name" => $name, "carid" => $carid['plate']);
        }
        return $users_arr;
    }
  
  
  

    public function SelectInComeByDate($_IncomeEDate, $_IncomeFDate) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        echo $_IncomeEDate;
        echo $_IncomeFDate;
        $_SQL = 'SELECT * FROM income WHERE id BETWEEN '.$_IncomeFDate.'  AND '.$_IncomeEDate;
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->execute();
        $_IncomeArray = array();
        while ($row = $_Statment->fetch()){
            $_Value = $row['value'];
            $_Desc = $row['description'];
            $_IncomeArray[] = array("value" => $_Value, "description"=>$_Desc);
        }
        return $_IncomeArray;
    }

    public function SelectCarsFromUsers($_Uid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM user WHERE comp_id=:_cid';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $_Uid);
        $_Statment->execute();

        $users_arr = array();
        while ($row = $_Statment->fetch()) {
            $carid = $this->Select('cars', $row['carid']);
            $users_arr[] = array("id" => $carid['id'], "name" => $carid['plate'], "price" => $carid['car_price']);
        }
        return $users_arr;
    }
  
  public function SelectCompanyLiness($_Uid) {
    	$_CarIDs = array();
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM company WHERE comp_id=:_cid';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $_Uid);
        $_Statment->execute();
        $_CarIDs = $_Statment->fetchAll();
        return $_CarIDs;
        
    }
  
  public function SelectCompanyDrivers($_Uid) {
    	$_CarIDs = array();
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
    
    	if($_Uid == 1){
        $_SQL = 'SELECT * FROM driver ';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->execute();
        $_CarIDs = $_Statment->fetchAll();
        }
    	if($_Uid == 2){
          $_SQL = 'SELECT * FROM retailer ';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->execute();
        $_CarIDs = $_Statment->fetchAll();
        }
        return $_CarIDs;
        
    }

    public function SelectCar($_cid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM cars WHERE id=:_cid';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $_cid);
        $users_arr = array();
        $_Statment->execute();
        $carid = $_Statment->fetch();
        $users_arr[] = array("price" => $carid['car_price']);
        return $users_arr;
    }

    public function SelectCars($_InvID) {
        $_CarIDs = array();
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM invoice_car WHERE invoice_id=:_ID';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_ID', $_InvID);
        $_Statment->execute();
        $_CarIDs = $_Statment->fetchAll();
        return $_CarIDs;
    }

    public function SelectUserData($_CID) {
        $_CarIDs = array();
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM user WHERE carid=:_ID';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_ID', $_CID);
        $_Statment->execute();
        $_CarIDs = $_Statment->fetch();
        return $_CarIDs;
    }

    public function SelectTax($_InvID) {
        $_CarIDs = array();
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM tax_invoice WHERE i_id=:_ID';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_ID', $_InvID);
        $_Statment->execute();
        $_CarIDs = $_Statment->fetchAll();
        $_Tax = array();
        foreach ($_CarIDs as $_C) {
            $_SQL = 'SELECT * FROM tax WHERE id=:_taxid';
            $_Statment = $_Conn->prepare($_SQL);
            $_Statment->bindParam(':_taxid', $_C['tax_id']);
            $_Statment->execute();
            $_Tax[] = $_Statment->fetch();
        }
        return $_Tax;
    }

    public function RentCar($cid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE cars SET rented=1 WHERE id=:_id ';
        $_Statment = $_Conn->prepare($sql);
        $_Statment->bindParam(':_id', $cid);
        $_Statment->execute();
    }

    public function SelectUserCar($_CarID) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE cars SET rented=1 WHERE id=:_id ';
        $_Statment = $_Conn->prepare($sql);
        $_Statment->bindParam(':_id', $cid);
        $_Statment->execute();
    }

    public function update($_TableName, $id, array $values) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE' . $_TableName . 'SET ';
        $fields = array_keys($values);
        $vals = array_values($values);

        foreach ($fields as $i => $f) {
            $fields[$i] .= ' = ? ';
        }

        $sql .= implode(',', $fields);

        $statement = $_Conn->prepare($sql);
        foreach ($vals as $i => $v) {
            $statement->bindValue($i + 1, $v);
        }
        $sql .= ' WHERE id =:_id';

        $statement->bindParam(':_id', $id);

        $statement->execute();
    }
  
  public function updateDivel($id,$date) {
    	$db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE car_line SET workedToday = 1 WHERE user_id=:_id AND date=:_km';
        $_Statment = $_Conn->prepare($sql);
        $_Statment->bindParam(':_id', $id);
        $_Statment->bindParam(':_km', $date);
        $_Statment->execute();
    }
  
  public function updateAdvance($_TableName, $id, array $values) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE' . $_TableName . 'SET ';
        $fields = array_keys($values);
        $vals = array_values($values);

        foreach ($fields as $i => $f) {
            $fields[$i] .= ' = ? ';
        }

        $sql .= implode(',', $fields);

        $statement = $_Conn->prepare($sql);
        foreach ($vals as $i => $v) {
            $statement->bindValue($i + 1, $v);
        }
        $sql .= ' WHERE d_id =:_id';

        $statement->bindParam(':_id', $id);

        $statement->execute();
    }

    public function UpdateKm($_id, $_km) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE cars SET km=:_km WHERE id=:_id';
        $_Statment = $_Conn->prepare($sql);
        $_Statment->bindParam(':_km', $_km);
        $_Statment->bindParam(':_id', $_id);
        $_Statment->execute();
    }

    public function UpdateUserDate($_uid, $_uname, $_ucomp, $_ucarid, $_ucarprice, $_sdate, $_edate) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE user SET name=:_name , comp_id=:_compid , carid=:_cid , startdate=:_sdate , enddate =:_edate WHERE id=:_id';
        $_Statment = $_Conn->prepare($sql);
        $_Statment->bindParam(':_name', $_uname);
        $_Statment->bindParam(':_compid', $_ucomp);
        $_Statment->bindParam(':_sdate', $_sdate);
        $_Statment->bindParam(':_edate', $_edate);
        $_Statment->bindParam(':_cid', $_ucarid);
        $_Statment->bindParam(':_id', $_uid);
        $_Statment->execute();
        $_sql = 'UPDATE cars set car_price=:_cprice WHERE id=:_id';
        $_Statment = $_Conn->prepare($_sql);
        $_Statment->bindParam(':_id', $_ucarid);
        $_Statment->bindParam(':_cprice', $_ucarprice);
        $_Statment->execute();
        $this->UpdateCompanyTotalPrice($_ucomp);
    }

    public function UpdateCompanyTotalPrice($_cid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM user WHERE comp_id=:_id';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_id', $_cid);
        $_Statment->execute();
        $_UserData = array();
        $i = 0;
        while ($Row = $_Statment->fetch()) {
            $_UserData[$i] = $Row;
            $i++;
        }

        $_Totalprice = 0;
        foreach ($_UserData as $U) {
            $_SQL = 'SELECT * FROM cars WHERE id=:_id';
            $_Statment = $_Conn->prepare($_SQL);
            $_Statment->bindParam(':_id', $U['carid']);
            $_Statment->execute();
            $_carprice = $_Statment->fetch();
            $_Totalprice += $_carprice['car_price'];
        }

        $sql = 'UPDATE company SET cars=:_cars , totalprice=:_num WHERE id=:_id';
        $_Statment = $_Conn->prepare($sql);
        $_Statment->bindParam(':_cars', $i);
        $_Statment->bindParam(':_num', $_Totalprice);
        $_Statment->bindParam(':_id', $_cid);
        $_Statment->execute();
    }

    public function SelectTaxData($_InvID) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM tax_invoice WHERE i_id=:_cid';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $_InvID);
        $_Statment->execute();
        $LoanData = $_Statment->fetch();

        $_SQL = 'SELECT * FROM tax WHERE id=:_id';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_id', $LoanData['tax_id']);
        $_Statment->execute();
        $_TaxData = $_Statment->fetchAll();
        $_taxarray = array();
        foreach ($_TaxData as $_T) {
            $_taxarray[] = $_T['percentage'];
        }
        return $_taxarray;
    }

    public function SelectLoanValue($_Did) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM loan_driver WHERE driver_id=:_cid';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_cid', $_Did);
        $_Statment->execute();
        $LoanData = $_Statment->fetchAll();
        $_Sum = 0;
        foreach ($LoanData as $_L) {
            $_SQL = 'SELECT * FROM loan WHERE id=:_id';
            $_Statment = $_Conn->prepare($_SQL);
            $_Statment->bindParam(':_id', $_L['loan_id']);
            $_Statment->execute();
            $LoanValue = $_Statment->fetch();
            $_Sum += $LoanValue['value'];
        }
        return $_Sum;
    }
  
  public function SelectAdvance($_Did) {
    
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM advance_driver WHERE d_id=:_Did';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_Did', $_Did);
        $_Statment->execute();
        $LoanData = $_Statment->fetchAll();
        $_Sum = 0;
        foreach ($LoanData as $_L) {
            $_SQL = 'SELECT * FROM advance WHERE id=:_id';
            $_Statment = $_Conn->prepare($_SQL);
            $_Statment->bindParam(':_id', $_L['adv_id']);
            $_Statment->execute();
            $LoanValue = $_Statment->fetch();
            $_Sum += $LoanValue['value'];
        }
        return $_Sum;
    }

    public function UpdateDriverSal($_id, $_sal) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE driver SET salarywtihattend=:sal WHERE id=:_id';
        $_Statment = $_Conn->prepare($sql);
        $_Statment->bindParam(':sal', $_sal);
        $_Statment->bindParam(':_id', $_id);
        $_Statment->execute();
    }
  
      public function UpdateRetailerSal($_id, $_sal) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE retailer SET salarywithattend=:sal WHERE id=:_id';
        $_Statment = $_Conn->prepare($sql);
        $_Statment->bindParam(':sal', $_sal);
        $_Statment->bindParam(':_id', $_id);
        $_Statment->execute();
    }

    public function UpdateDriver($_name, $_id, $_natnum, $_sal, $_num, $_lineid, $_carid) {

        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $sql = 'UPDATE driver SET name=:name, salary=:_sal, line=:lineid, car_id=:_cid, phone_num=:_phone, nationalid=:_natid WHERE id=:_id';
        $_Statment = $_Conn->prepare($sql);
        $_Statment->bindParam(':name', $_name);
        $_Statment->bindParam(':_sal', $_sal);
        $_Statment->bindParam(':lineid', $_lineid);
        $_Statment->bindParam(':_cid', $_carid);
        $_Statment->bindParam(':_phone', $_num);
        $_Statment->bindParam(':_natid', $_natnum);
        $_Statment->bindParam(':_id', $_id);
        $_Statment->execute();
    }

    public function SelectDriverLine($_id) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM driver WHERE line=:_id';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_id', $_id);
        $_Statment->execute();
        $_DriverData = $_Statment->fetch();
        return $_DriverData;
    }

    public function SelectEmpData($_TableName, $_Uname, $_Password) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM employee WHERE empacc=:_Uname AND emppassword=:_Password';
        $_Statment = $_Conn->prepare($_SQL);
        $_Statment->bindParam(':_Uname', $_Uname);
        $_Statment->bindParam(':_Password', $_Password);
        $_Statment->execute();
        $EmpData = $_Statment->fetch();
        return $EmpData;
    }

    public function Select($_TableName, $_Values) {

        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();


        $sql = 'SELECT * FROM ' . $_TableName . ' WHERE id=:_Values';
        $_Values = (int) $_Values;
        $_Statement = $_Conn->prepare($sql);
        $_Statement->bindParam(':_Values', $_Values);
        $_Statement->execute();
        $_Answe = $_Statement->fetch();

        return $_Answe;
    }

    public function SelectReadWithCheck($_TableName, $_Values) {

        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();


        $sql = 'SELECT * FROM ' . $_TableName . ' WHERE id=:_Values';
        $_Values = (int) $_Values;
        $_Statement = $_Conn->prepare($sql);
        $_Statement->bindParam(':_Values', $_Values);
        $_Statement->execute();
        $_Answe = $_Statement->fetch();
        return $_Answe;
    }

    public function SelectMaxID($_TableName) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();

        $_SQL = 'SELECT MAX(ID) FROM ' . $_TableName;
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->execute();
        $_MaxID = $_Statement->fetch();
        return $_MaxID;
    }

    public function SelectReadID($_id) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();

        $_SQL = 'SELECT MAX(read_id) FROM  cars_kmread WHERE car_id=:_id';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->bindParam(':_id', $_id);
        $_Statement->execute();
        $_MaxID = $_Statement->fetch();
        return $_MaxID[0];
    }

    public function SelectParentdID($_id) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();

        $_SQL = 'SELECT MIN(read_id) FROM  cars_kmread WHERE car_id=:_ID';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->bindParam(':_ID', $_id);
        $_Statement->execute();
        $_MaxID = $_Statement->fetch();
        return $_MaxID[0];
    }

    public function SelectLineData($ID) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT line_id FROM date_line WHERE date_id=:_UID';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->bindParam(':_UID', $ID);
        $_Statement->execute();
        $_PageID = array();
        $i = 0;
        while ($_Row = $_Statement->fetch()) {
            $_PageID[$i] = $_Row[0];
            $i++;
        }
        $_PageCount = count($_PageID);
        $_PagesArray = array();

        for ($i = 0; $i < $_PageCount; $i++) {
            $PID = $_PageID[$i];
            $_SQL = 'SELECT * FROM line WHERE id=:_PageID AND workedtoday=0';
            $_Statement = $_Conn->prepare($_SQL);
            $_Statement->bindParam(':_PageID', $PID);
            $_Statement->execute();
            while ($_Row = $_Statement->fetch()) {
                $_PagesArray[$i] = $_Row['id'];
            }
        }

        return $_PagesArray;
    }

    public function updateWorkedLine($Lid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'UPDATE line SET workedtoday = 1 WHERE id=:_id';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->bindParam(':_id', $Lid);
        $_Statement->execute();
    }

    public function updateWorked() {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'UPDATE line SET workedtoday = 0';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->execute();
    }

    public function SelectOwnedCars() {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT * FROM cars WHERE rented=0';
        $_Statement = $_Conn->prepare($_SQL);
        $_Unrantedcars = array();
        $_Statement->execute();
        $i = 0;
        while ($_row = $_Statement->fetch()) {
            $_Unrantedcars[$i] = $_row['id'];
            $i++;
        }
        return $_Unrantedcars;
    }

    public function SelectPages($_UID) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT pageid FROM pages_emp WHERE empid=:_UID';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->bindParam(':_UID', $_UID);
        $_Statement->execute();
        $_PageID = array();
        $i = 0;
        while ($_Row = $_Statement->fetch()) {
            $_PageID[$i] = $_Row[0];
            $i++;
        }
        $_PageCount = count($_PageID);
        $_PagesArray = array();

        for ($i = 0; $i < $_PageCount; $i++) {

            $PID = $_PageID[$i];

            $_SQL = 'SELECT * FROM pages WHERE id=:_PageID';
            $_Statement = $_Conn->prepare($_SQL);
            $_Statement->bindParam(':_PageID', $PID);
            $_Statement->execute();
            while ($_Row = $_Statement->fetch()) {
                $_PagesArray[$i] = $_Row;
            }
        }

        return $_PagesArray;
    }

    public function UpdateRSal($_Rid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT car_id FROM retialer_cars WHERE retialer_id=:_Rid';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->bindParam(':_Rid', $_Rid[0]);
        $_Statement->execute();
        $_Car = array();
        $i = 0;
        while ($_Row = $_Statement->fetch()) {

            $_Car[$i] = $_Row[0];
            $i++;
        }
        $_CarCount = count($_Car);
        $_RetailerPrice = array();

        $_Total = 0;
        for ($i = 0; $i < $_CarCount; $i++) {
            $CID = $_Car[$i];

            $_SQL = 'SELECT price_retailer FROM cars WHERE id=:_CarId';
            $_Statement = $_Conn->prepare($_SQL);
            $_Statement->bindParam(':_CarId', $CID);
            $_Statement->execute();
            while ($_Row = $_Statement->fetch()) {
                $_Total += $_Row[0];
            }
        }
        $_SQL = 'UPDATE retailer SET salary=:_Total WHERE id=:_Rid';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->bindParam(':_Total', $_Total);
        $_Statement->bindParam(':_Rid', $_Rid[0]);
        $_Statement->execute();
    }

    public function UpdateRSalary($_Rid) {
        $db = BaseDao::getInstance();
        $_Conn = $db->getConnection();
        $_SQL = 'SELECT car_id FROM retialer_cars WHERE retialer_id=:_Rid';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->bindParam(':_Rid', $_Rid);
        $_Statement->execute();
        $_Car = array();
        $i = 0;
        while ($_Row = $_Statement->fetch()) {

            $_Car[$i] = $_Row[0];
            $i++;
        }
        $_CarCount = count($_Car);
        $_RetailerPrice = array();

        $_Total = 0;
        for ($i = 0; $i < $_CarCount; $i++) {
            $CID = $_Car[$i];

            $_SQL = 'SELECT price_retailer FROM cars WHERE id=:_CarId';
            $_Statement = $_Conn->prepare($_SQL);
            $_Statement->bindParam(':_CarId', $CID);
            $_Statement->execute();
            while ($_Row = $_Statement->fetch()) {
                $_Total += $_Row[0];
            }
        }
        $_SQL = 'UPDATE retailer SET salary=:_Total WHERE id=:_Rid';
        $_Statement = $_Conn->prepare($_SQL);
        $_Statement->bindParam(':_Total', $_Total);
        $_Statement->bindParam(':_Rid', $_Rid);
        $_Statement->execute();
        //UPDATE table_name
        //SET column1=value, column2=value2,...
        //WHERE some_column=some_value 
    }

    public function useremailTaken($useremail) {
        $statement = $this->db->prepare("SELECT id FROM users WHERE useremail = :useremail LIMIT 1 ");
        $statement->bindParam(':useremail', $useremail);
        $statement->execute();

        return ($statement->rowCount() > 0 );
    }

    public function checkPassConfirmation($useremail, $password) {

        $statement = $this->db->prepare("SELECT password FROM users WHERE useremail = :useremail LIMIT 1 ");
        $statement->bindParam(':useremail', $useremail);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            $row = $statement->fetch();

            return ($password == $row['password']);
        }

        return false;
    }

    public function checkHashConfirmation($useremail, $userhash) {

        $statement = $this->db->prepare("SELECT userhash FROM users WHERE useremail = :useremail LIMIT 1");
        $statement->bindParam(':useremail', $useremail);
        $statement->execute();

        if ($statement->rowCount() > 0) {
            $row = $statement->fetch();

            return ($userhash == $row['userhash']);
        }

        return false;
    }

}

?>