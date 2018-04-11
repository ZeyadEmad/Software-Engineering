<?php

class subGroup
{

    protected static $primarykey = 'id';
    static function getButtons()
    {
            $data = new data();
            $conn = $data->con();
            $sql = "SELECT id,number FROM `room` ";
            $result = $conn->query($sql);
            $x=0;
            $btns= array();


            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) 
                    {
                        //$btns[$x]=array($row["id"]=>$row["number"]);
                        $btns[$x]=array('id'=>$row['id'],'num'=>$row['number']);
                        $x=$x+1;
                    }
                }

            $str='';


            foreach($btns as $btn)
                {
                    $str.='&nbsp;<input type="radio" value="'.$btn['num'].'" name="room" id="'.$btn['id'].'" class="r1"/>'.$btn['num'].'';

                }
                return $str;
                $conn->close();
    }
	




    ####select-Course####
    static function selectCourse()
    {
        $data = new data();
        $conn = $data->con();
        $sql = "SELECT `id`, `course-name`, `Level` FROM `courses`  ";
        $result = $conn->query($sql);
        $x=0;
        $btns= array();	

            $str='';
            $str.='&nbsp;<select name="Courselist" class="form-control selectpicker"  style="border-radius: 0px 5px 5px 0px; border: 1px solid #eee; margin-bottom: 15px; width: 50%; height: 40px;">';
            $str.='&nbsp;<optgroup label="Course" name="Courselist">';
            if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) 
                                {

                                    $btns[$x]=array('id'=>$row['id'],'fname'=>$row['course-name'],'lname'=>$row['Level']);
                                    $Cid = $row['id'];
                                    $fname= $row['course-name'];
                                    $lname = $row['Level'];
                                    $str.='&nbsp; <option id="Courselist" label="'.$fname.' Level: '.$lname.'" value="'.$Cid.'" style="Background-color: #eee"/>';
                                    $x=$x+1;
                                }
                        }
            $str.='&nbsp;</optgroup>';
            $str.='&nbsp;</select>';
            $str.='<br><br>';
            return $str;
            $conn->close();
    }
   
        ####Student Add course####
    static function studentAddcourse()
    {
        $data = new data();
        $conn = $data->con();
        $sql = "SELECT `id`, `course-name`, `Level` FROM `courses`  ";
        $result = $conn->query($sql);
        $x=0;
        $btns= array();	

            $str='';
            $str.='&nbsp;<select name="Courselist" class="form-control selectpicker"  style="border-radius: 0px 5px 5px 0px; border: 1px solid #eee; margin-bottom: 15px; width: 50%; height: 40px;">';
            $str.='&nbsp;<optgroup label="Course" name="Courselist">';
            if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) 
                                {

                                    $btns[$x]=array('id'=>$row['id'],'fname'=>$row['course-name'],'lname'=>$row['Level']);
                                    $Cid = $row['id'];
                                    $fname= $row['course-name'];
                                    $lname = $row['Level'];
                                    $str.='&nbsp; <option id="Courselist" label="'.$fname.' Level: '.$lname.'" value="'.$Cid.'" style="Background-color: #eee"/>';
                                    $x=$x+1;
                                }
                        }
            $str.='&nbsp;</optgroup>';
            $str.='&nbsp;</select>';
            $str.='<br><br>';
            return $str;
            $conn->close();

    }

    ####select-Teacher####
    static function selectTeacher()
    {
        $data = new data();
        $conn = $data->con();
        $sql = "SELECT `id`, `First-name`, `last-name` FROM `user` WHERE `type-id`='4' ";
        $result = $conn->query($sql);
        $x=0;
        $btns= array();	

            $str='';
            $str.='&nbsp;<select name="Teacherlist" class="form-control selectpicker" style="border-radius: 0px 5px 5px 0px; border: 1px solid #eee; margin-bottom: 15px; width: 50%; height: 40px;">';
            $str.='&nbsp;<optgroup label="Teacher" name="Teacherlist"  >';


            if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) 
                                {
                                    //$btns[$x]=array($row["id"]=>$row["number"]);
                                    #$btns[$x]=array('id'=>$row['id'],'fname'=>$row['First-name'],'lname'=>$row['last-name']);
                                    #$x=$x+1;
                                    $Tid = $row['id'];
                                    $fname= $row['First-name'];
                                    $lname = $row['last-name'];

                                    #$str.='&nbsp; <option id="glist" value="$id" name="Teacherist" >"MR $fname $lname "</option>';
                                    $str.='&nbsp; <option id="Teacherlist" label="Mr. '.$fname.' '.$lname.'"  value="'.$Tid.'" style="Background-color: #eee"/>';

                                    #$str.='&nbsp;<input type="button"  value="$id" name="$id"  target="_parent" style="text-align: center;height:100px; width: 100px; Background-color:#ffcccc; position:static;">"MR" .$fname. " " .$lname.</button>';

                                    #$btns[$x]= $str;
                                    #$x=$x+1;
                                }
                        }
            $str.='&nbsp;</optgroup>';
            $str.='&nbsp;</select>';
            $str.='<br><br>';
            return $str;
            $conn->close();
    }
}

?>
