<?php
require_once '../staff/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
    <link type="text/css" href="../css/contactus.css" rel="stylesheet" />
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
        <header class="mdl-layout__header">
          <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                        mdl-textfield--floating-label mdl-textfield--align-right">
              <label class="mdl-button mdl-js-button mdl-button--icon"
                     for="fixed-header-drawer-exp">
                <i class="material-icons">search</i>
              </label>
              <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" name="sample"
                       id="fixed-header-drawer-exp">
              </div>
            </div>
          </div>
        </header>
        <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Home</span>
        <nav class="mdl-navigation" id="myselect">
          <a class="mdl-navigation__link links" href="#form_name1" > View Schedule </a>
          <a class="mdl-navigation__link links" href="#form_name2"> View grades </a>
          <a class="mdl-navigation__link links" href="#form_name3"> News </a>
          <a class="mdl-navigation__link links" href="#form_name4"> Add Course </a>
          <a class="mdl-navigation__link links" href="#form_name5"> Center details  </a>
          <a class="mdl-navigation__link links" href="#form_name6"> Contact Us  </a>
          <a class="mdl-navigation__link " href="../Index.php"> Logout </a>
        </nav>
        </div>
        <main class="mdl-layout__content" style="padding-left: 20%">
            
                
                <!-- ------------------------------- Form1 View Schedule--------------------------------- -->
                
                <div method="POST" action="" class="divs"  name="form_name1" id="form_name1" style="display:none" style="padding-right: 20%;padding-bottom: 5%;"  >
                        <h3>  Week  </h3>
                        <table class="mdl-data-table mdl-js-data-table">
                        <thead>
                          <tr>
                            <th class="mdl-data-table__cell--non-numeric"></th>
                            <th class="mdl-data-table__cell--non-numeric">Saturday</th>
                            <th class="mdl-data-table__cell--non-numeric">Sunday</th>
                            <th class="mdl-data-table__cell--non-numeric">Monday</th>
                            <th class="mdl-data-table__cell--non-numeric">Tuesday</th>
                            <th class="mdl-data-table__cell--non-numeric">Wednesday</th>
                            <th class="mdl-data-table__cell--non-numeric">Thursday</th>
                            <th class="mdl-data-table__cell--non-numeric">Friday</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="mdl-data-table__cell--non-numeric">09:00 AM -> 11:00 AM</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                          </tr>

                                <tr>
                            <td class="mdl-data-table__cell--non-numeric">11:00 AM -> 01:00 PM</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>

                          </tr>

                                  <tr>
                            <td class="mdl-data-table__cell--non-numeric">01:00 PM -> 03:00 PM</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>

                          </tr>
                              <tr>
                            <td class="mdl-data-table__cell--non-numeric">03:00 PM -> 05:00 PM</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>

                          </tr>

                              <tr>
                            <td class="mdl-data-table__cell--non-numeric">05:00 PM -> 07:00 PM</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>

                          </tr>


                              <tr>
                            <td class="mdl-data-table__cell--non-numeric">07:00 PM -> 09:00 PM</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>

                          </tr>

                            <tr>
                            <td class="mdl-data-table__cell--non-numeric">09:00 PM -> 11:00 PM</td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>
                            <td class="mdl-data-table__cell--non-numeric"></td>

                          </tr>
                        </tbody></table> 

                        <br><br>&nbsp;
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary signupbtn" type="submit">Submit </button>
                        <br><br>
                        </div>
                                 
                <!-- ------------------------------- Form2 View grades--------------------------------- -->
                
                <form method="POST" action="" class="divs"  name="form_name2" id="form_name2" style="display: none">
                        <h3> Welcome Student </h3>
                        <h4> Student's Grades</h4>
                        <table class="mdl-data-table mdl-js-data-table">
                          <thead>
                            <tr>
                              <th class="mdl-data-table__cell--non-numeric">Subject</th>
                              <th class="mdl-data-table__cell--non-numeric">Grade</th>
                              <th class="mdl-data-table__cell--non-numeric">Percentage</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="mdl-data-table__cell--non-numeric">Physics</td>
                              <td class="mdl-data-table__cell--non-numeric"> A </td>
                              <td class="mdl-data-table__cell--non-numeric"> 90% </td>
                            </tr>
                            <tr>
                              <td class="mdl-data-table__cell--non-numeric">Math</td>
                              <td class="mdl-data-table__cell--non-numeric"> A </td>
                              <td class="mdl-data-table__cell--non-numeric"> 90% </td>
                            </tr>
                            <tr>
                              <td class="mdl-data-table__cell--non-numeric">Arabic</td>
                              <td class="mdl-data-table__cell--non-numeric"> C </td>
                              <td class="mdl-data-table__cell--non-numeric"> 70% </td>
                            </tr>
                          </tbody>
                        </table>  
                    </form>
                
                <!-- ------------------------------- Form3 News--------------------------------- -->

                <form method="POST" action="" class="divs"  name="form_name3" id="form_name3" style="display: none">
                        <h3> New News!! </h3>
                        <table id="tn1" class="mdl-data-table mdl-js-data-table tn1">
                          <thead>
                            <tr>
                              <th class="mdl-data-table__cell--non-numeric">Content</th>
                              <th class="mdl-data-table__cell--non-numeric">Details</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="mdl-data-table__cell--non-numeric">***</td>
                              <td class="mdl-data-table__cell--non-numeric">----</td>
                            </tr>
                            <tr>
                              <td class="mdl-data-table__cell--non-numeric">***</td>
                              <td class="mdl-data-table__cell--non-numeric">empty</td>
                            </tr>
                            <tr>
                              <td class="mdl-data-table__cell--non-numeric">***</td>
                              <td class="mdl-data-table__cell--non-numeric">----</td>
                            </tr>
                            <tr>
                              <td class="mdl-data-table__cell--non-numeric">***</td>
                              <td class="mdl-data-table__cell--non-numeric">empty</td>
                            </tr>
                          </tbody>
                        </table>  
                    </form>
                <!-- ------------------------------- Form4 Add Course--------------------------------- -->

                <form method="POST" action="" class="divs"  name="form_name4" id="form_name4" style="display: none;">
                        <h3>    Add Course </h3>
                       <!--  <table class="mdl-data-table mdl-js-data-table">
                          <thead>
                            <tr>
                              <th class="mdl-data-table__cell--non-numeric">Subject</th>
                              <th class="mdl-data-table__cell--non-numeric">Teacher</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="md1-data-table__cell-non-numeric">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
                                    <input type="text" value="" class="mdl-textfield__input" id="sample5" readonly>
                                    <input type="hidden" value="" name="sample5">
                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    <label for="sample5" class="mdl-textfield__label">Courses</label>
                                    <ul for="sample5" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="1">Physics</li>
                                        <li class="mdl-menu__item" data-val="2R">Arabic</li>
                                        <li class="mdl-menu__item" data-val="3S">Chemstry</li>
                                        <li class="mdl-menu__item" data-val="4I">Deutsch</li>
                                        <li class="mdl-menu__item" data-val="5R">Math</li>
                                        <li class="mdl-menu__item" data-val="6E">English</li>
                                    </ul>
                                </div>
                              </td>
                              <td class="mdl-data-table__cell--non-numeric">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height">
                                    <input type="text" value="" class="mdl-textfield__input" id="sample6" readonly>
                                    <input type="hidden" value="" name="sample6">
                                    <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                    <label for="sample6" class="mdl-textfield__label">Teachers</label>
                                    <ul for="sample6" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                        <li class="mdl-menu__item" data-val="BY">Mr.Ahmed Mohamed</li>
                                        <li class="mdl-menu__item" data-val="BR">Mr.Mohamed Ali</li>
                                        <li class="mdl-menu__item" data-val="ES">Mr.Ali Tareeq</li>
                                        <li class="mdl-menu__item" data-val="FI">Mr.Hani Mohamed</li>
                                        <li class="mdl-menu__item" data-val="FR">Mr.Ahmed Hani</li>
                                        <li class="mdl-menu__item" data-val="DE">Mr.Waleed Mahmoud</li>
                                    </ul>
                                </div>
                              </td>

                            </tr>
                          </tbody>
                        </table> -->
                        <br>   
                         <?php echo studentAddcourse();?>
                        
                        <br><br>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--primary signupbtn" type="submit">Submit</button><br><br> 
                    </form>
                
                <!-- ------------------------------- Form5 Center details--------------------------------- -->

                <form method="POST" action="" class="divs"  name="form_name5" id="form_name5" style="display: none;" >
                        <h3 >Information about the center</h3> 
                        <ul>
                            <li class="mdl-typography--body-2">Register your schedule online:</li>
                            <p class="mdl-typography--body-1">Submit your information and make sure your regestration is successful.</p>
                            <li class="mdl-typography--body-2">Our System consist of many facilities:</li>
                            <p class="mdl-typography--body-1">Student cash deposite, Register pop revisions, view grades, send email.</p>
                            <li class="mdl-typography--body-2">There is only one branch in Mokattam:</li>
                            <p class="mdl-typography--body-1">9 Street in front of Toskanini cafe.</p>
                            <li class="mdl-typography--body-2">You can see:</li>
                            <p class="mdl-typography--body-1">Grades of exams and quizes, attendence.</p>
                        </ul>
                        <br><br> 
                    </form>
                
                <!-- ------------------------------- Form6 Contact Us--------------------------------- -->

                <form method="POST" action="" class="divs"  name="form_name6" id="form_name6" style="display: none;" >
                    <div>   
                        <h3 >Contact Us</h3> 
                        <ul>
                            <li class="mdl-typography--body-2">Email:</li>
                            <p class="mdl-typography--body-1">info@winnereducational.com</p>
                            <li class="mdl-typography--body-2">Mobile no:</li>
                            <p class="mdl-typography--body-1">0100 158 3585</p>
                            <li class="mdl-typography--body-2">Phone no:</li>
                            <p class="mdl-typography--body-1">(02) 289765677</p>
                            <li class="mdl-typography--body-2">Open Hours:</li>
                            <p class="mdl-typography--body-1">9:00 am – 22:00 PM (EET)</p>
                        </ul>
                        <br><br>
                        
                        <div id="map" >
                        </div>
                        <div class="mynav">
                        <script type="text/javascript"> 
                            function myMap() 
                            {
                               var mapOptions = {
                                   center: new google.maps.LatLng(  30.021667  ,  31.303333),
                                   zoom: 15,
                                   mapTypeId: google.maps.MapTypeId.HYBRID
                               };
                               var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                           }
                       </script>
                       <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
                        </div>
                    </div>
                </form>
                
                
            
        </main>
    </div>
    <script>
    $('a.links').click(function (e)
    {
        e.preventDefault();
        var div_id = $('a.links').index($(this));
        $('.divs').hide().eq(div_id).show();
    });
    </script>
    

    <?php
    require_once "../constant/footer.php";
    ?>

</body>
</html>