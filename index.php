<?php
include('db.php');
?>
<html>

<head>
    <title>Plan for the week</title>
    <style>
        #dropdown {
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            padding: 10px;
            width: 200px;
          }
          #dropdown.active {
            background-color: #ddd;
          }
          .option{
            width:522pt;
            border-top-style:solid;
            border-top-width:1pt;
            border-left-style:solid;
            border-left-width:1pt;
            border-bottom-style:solid;
            border-bottom-width:1pt;
            border-right-style:solid;
            border-right-width:1pt; 
            background-color:"#BCD5ED"; 

          }
          .center{
            width:200px;
            padding-left: 100px;
          }
          .align{
            width:200px;
            padding-left: 200px;
            margin-left: 250px;
            margin-top: 50px;

          }
    </style>
</head>
<body>
    <table id='EmpTask' style="border-collapse:collapse;margin-left:5.27398pt" cellspacing="0">
        <tbody id="Emp">

            <th class="center" style="height:22pt">
             
                        <select class="form-control" id="change" onChange="Change()" >
                            <?php
                                $fromDay=0;
                                $fromMonth="";
                               $days=array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
                                foreach($result as $row){ 
                                   $week_name= isset($row['week_name'])?$row['week_name']:"";
                                   $from_date= isset($row['from_date'])?$row['from_date']:"";
                                   $to_date=isset($row['to_date'])? $row['to_date']:"";

                                   $timestamp = strtotime($from_date);
                                   $fromDay = date('d', $timestamp);
                                   $fromMonth = date('F', $timestamp);

                                   $timestamp = strtotime($to_date);
                                   $toDay = date('d', $timestamp);
                                   $toMonth = date('F', $timestamp);

                            ?>        
                                    <option class="option">
                                            <p class="s4"  style="padding-top: 3pt;padding-left: 171pt;padding-right: 170pt;text-indent: 0pt;text-align: center;"><?php echo( $week_name .'('.$from_date .'–'.$to_date .')'); ?></p>
                                    </option>
                            <?php        
                                }
                            ?>
                        </select>
            </th>

            <tr id='days' style="height:41pt">
                <td  style="width:102pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#BCD5ED">
                    <p style="text-indent: 0pt;text-align: left;"><br></p>
                    <p class="s5" style="text-indent: 0pt;text-align: center;">#</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#BCD5ED">
                    <p class="s5" id="0" style="padding-top: 6pt;padding-left: 9pt;padding-right: 8pt;text-indent: 8pt;text-align: left;">Sun 10 May</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#BCD5ED">
                    <p class="s5" id="1" style="padding-top: 6pt;padding-left: 9pt;padding-right: 9pt;text-indent: 6pt;text-align: left;">Mon 11 May</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#BCD5ED">
                    <p class="s5" id="2" style="padding-top: 6pt;padding-left: 9pt;padding-right: 8pt;text-indent: 8pt;text-align: left;">Tue 12 May</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#BCD5ED">
                    <p class="s5" id="3" style="padding-top: 6pt;padding-left: 9pt;padding-right: 9pt;text-indent: 6pt;text-align: left;">Wed 13 May</p>
                </td>
                <td style="width:46pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#BCD5ED">
                    <p class="s5" id="4" style="padding-top: 6pt;padding-left: 6pt;padding-right: 6pt;text-indent: 8pt;text-align: left;">Thu 14 May</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#BCD5ED">
                    <p class="s5" id="5" style="padding-top: 6pt;padding-left: 9pt;padding-right: 8pt;text-indent: 11pt;text-align: left;">Fri 15 May</p>
                </td>
                <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#BCD5ED">
                    <p class="s5" id="6" style="padding-top: 6pt;padding-left: 7pt;padding-right: 7pt;text-indent: 9pt;text-align: left;">Sat 16 May</p>
                </td>
                <td style="width:63pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#BCD5ED">
                    <p style="text-indent: 0pt;text-align: left;"><br></p>
                    <p class="s5" style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Total</p>
                </td>
            </tr>

            <tr style="height:21pt" id="market" oninput="executer()">
                <td style="width:102pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s5" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Marketing Team</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s5" id="sun" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">24:00</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">22:30</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">24:00</p>
                </td>
                <td style="width:46pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">23:00</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">25:00</p>
                </td>
                <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:63pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s5" id="totalMar" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">118:30</p>
                </td>
            </tr>

            
            <tr style="height:21pt" id="Emp1" oninput="executer()">
                <td style="width:102pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 35pt;padding-right: 35pt;text-indent: 0pt;text-align: center;">Emp 1</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id="em1" class="Emp1" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id="em1" class="Emp1" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">07:30</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id="em1" class="Emp1" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">07:00</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id="em1" class="Emp1" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:00</p>
                </td>
                <td style="width:46pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id="em1" class="Emp1" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:00</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id="em1" class="Emp1" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:00</p>
                </td>
                <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id="em1" class="Emp1"  onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:63pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id="total1"  style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;"></p>
                </td>
            </tr>
            <tr style="height:20pt" id="Emp2" oninput="executer()">
                <td style="width:102pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 2pt;padding-left: 35pt;padding-right: 35pt;text-indent: 0pt;text-align: center;">Emp 2</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:30</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:00</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:00</p>
                </td>
                <td style="width:46pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">07:00</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:00</p>
                </td>
                <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:63pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id='total2'  style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;"></p>
                </td>
            </tr>
            <tr style="height:21pt" id="Emp3"  oninput="executer()">
                <td style="width:102pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" style="padding-top: 3pt;padding-left: 35pt;padding-right: 35pt;text-indent: 0pt;text-align: center;">Emp 3</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:00</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">07:30</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:00</p>
                </td>
                <td style="width:46pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">08:00</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">09:00</p>
                </td>
                <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" onclick="makeEditable(this)" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:63pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                    <p class="s5" id="total3"  style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;"></p>
                </td>
            </tr>
            <tr style="height:21pt" >
                <td style="width:102pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s4" style="padding-top: 3pt;padding-left: 35pt;padding-right: 35pt;text-indent: 0pt;text-align: center;">Total</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s4" id='totalSun' style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s4" id='totalMon' style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">72:00</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s4" id='totalTus' style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">67:30</p>
                </td>
                <td style="width:53pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s4" id='totalWed'  style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">72:00</p>
                </td>
                <td style="width:46pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s4" id='totalThu' style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">69:00</p>
                </td>
                <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s4" id='totalFri' style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">75:00</p>
                </td>
                <td style="width:49pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s4" id='totalSat' style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">00:00</p>
                </td>
                <td style="width:63pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" bgcolor="#C5DFB3">
                    <p class="s4" id="total" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">354:00</p>
                </td>
            </tr>
           

        </tbody>
    </table>
    <div class='align'>
                <button class="centralBtn btn btn-primary" id="generate">Generate</button>
    </div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
   
        var sun=[];
        var mon=[];
        var tue=[];
        var wed=[];
        var thu=[];
        var fri=[];
        var sat=[];
    
    Change();
    function Change(){
       
        var value=$('#change').val();
        if(value!=""){
            var string = value;
            var number = parseInt(string.match(/\d+/)[0]);
        }else{
            var number=1;
        }
        
        
        // arrayData=JSON.parse(arrayData);
        // get data from table with ajax
        $.ajax({
            url:'getweekdata.php',
            type:'GET',
            data:{'week':number},
            success:function(data){
                // how to convert data to array
                // how to find type of data
                var week_name=data['week_name'];
                var from_date=data['from_date'];
                var to_date=data['to_date'];
                var days=[ 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
              
                    if(data['week_name']=="Week "+number)
                    {
                        
                        
                        var dateObj = new Date(from_date);
                        var month = dateObj.toLocaleString("en-us", { month: "long" });
                        var fromDay = dateObj.getDate();
                        var dateArray=[];
                        

                        for(var i=0;i<7;i++)
                        {
                        
                        if(fromDay==31){
                            fromDay=1;
                            var dateObj = new Date(from_date);
                            dateObj.setMonth(dateObj.getMonth() + 1);
                            var nextMonthName = dateObj.toLocaleString("en-us", { month: "long" });
                            month=nextMonthName;
                            dateArray.push(days[i]+" "+fromDay+" "+month); 
                            fromDay++;
                        
                        }else{
                            dateArray.push(days[i]+" "+fromDay+" "+month); 
                            fromDay++;
                        }

                        }
                        for(var j=0;j<7;j++){
                            $('#0').text(dateArray[0]);
                            $('#1').text(dateArray[1]);
                            $('#2').text(dateArray[2]);
                            $('#3').text(dateArray[3]);
                            $('#4').text(dateArray[4]);
                            $('#5').text(dateArray[5]);
                            $('#6').text(dateArray[6]);
                        }
                        
                    }
             
            }
           
        })  
    }
    function makeEditable(element) {
      element.contentEditable = true;
      element.focus();
    }
     executer();

    function executer()
    {
        //alert("hello");
        valueFinder1();
        valueFinder2();
        valueFinder3();
        marketer();
        total(); 
        SundayBaseTotal();
        MondayBaseTotal();
        TusdayBaseTotal();
        WeddayBaseTotal()
        ThudayBaseTotal();
        FridayBaseTotal();
        SatdayBaseTotal();

    }

   
    function valueFinder1()
    {
        // how to find all p value associated with tr with id=Emp1
        var emp1 = document.getElementById("Emp1");
        var emp1p = emp1.getElementsByTagName("p");
        var emp1pArray=[];
        for(var i=0;i<emp1p.length-1;i++)
        {
            emp1pArray.push(emp1p[i].innerHTML);
        }
        var totalMinutes = 0;
        
        $.each(emp1pArray, function(index, value) {
            
            if(value!="Emp 1")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
                if(index==1)
                {
                    sun.push(hours+":"+minutes);

                }else if(index==2)
                {
                    mon.push(hours+":"+minutes);

                }else if(index==3)
                {
                    tue.push(hours+":"+minutes);

                }else if(index==4)
                {
                    wed.push(hours+":"+minutes);

                }else if(index==5)
                {
                    thu.push(hours+":"+minutes);
                }else if(index==6)
                {
                    fri.push(hours+":"+minutes);

                }else if(index==7)
                {
                    sat.push(hours+":"+minutes);
                   
                }       

            }
           
              
        
        });
        

        var Emp1Hours = Math.floor(totalMinutes / 60);
        Emp1Hours=Emp1Hours==0?"00":Emp1Hours;
        var Emp1Minutes = totalMinutes % 60;
        Emp1Minutes=Emp1Minutes==0?"00":Emp1Minutes;
        var Emp1HourMinute=Emp1Hours+":"+Emp1Minutes;
       
        $('#total1').text(Emp1HourMinute);
        console.log('Total Hours && minute:', Emp1HourMinute);
        
    }

    function valueFinder2()
    {
        var emp1 = document.getElementById("Emp2");
        var emp1p = emp1.getElementsByTagName("p");
        var emp1pArray=[];
        for(var i=0;i<emp1p.length-1;i++)
        {
            emp1pArray.push(emp1p[i].innerHTML);
        }
        var totalMinutes = 0;
        $.each(emp1pArray, function(index, value) {
            console.log(value);
            if(value!="Emp 2")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
              if(index==1)
                {
                    sun.push(hours+":"+minutes);

                }else if(index==2)
                {
                    mon.push(hours+":"+minutes);

                }else if(index==3)
                {
                    tue.push(hours+":"+minutes);

                }else if(index==4)
                {
                    wed.push(hours+":"+minutes);

                }else if(index==5)
                {
                    thu.push(hours+":"+minutes);
                }else if(index==6)
                {
                    fri.push(hours+":"+minutes);

                }else if(index==7)
                {
                    sat.push(hours+":"+minutes);
                   
                }       

            }
     
        });

        var Emp2Hours =  Math.floor(totalMinutes / 60);
        Emp2Hours=Emp2Hours==0?"00":Emp2Hours;
        var Emp2Minutes = totalMinutes % 60;
        Emp2Minutes=Emp2Minutes==0?"00":Emp2Minutes;
        var Emp2HourMinute=Emp2Hours+":"+Emp2Minutes;
        $('#total2').text(Emp2HourMinute);
        console.log('Total Hours && minute:', Emp2HourMinute);
    }

    function valueFinder3()
    {
        // how to find all p value associated with tr with id=Emp1
        var emp1 = document.getElementById("Emp3");
        var emp1p = emp1.getElementsByTagName("p");
        var emp1pArray=[];
        for(var i=0;i<emp1p.length-1;i++)
        {
            emp1pArray.push(emp1p[i].innerHTML);
        }
        var totalMinutes = 0;
        // var sun=[];
        // var mon=[];
        // var tue=[];
        // var wed=[];
        // var thu=[];
        // var fri=[];
        // var sat=[];
        $.each(emp1pArray, function(index, value) {
            console.log(value);
            if(value!="Emp 3")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
              if(index==1)
                {
                    sun.push(hours+":"+minutes);

                }else if(index==2)
                {
                    mon.push(hours+":"+minutes);

                }else if(index==3)
                {
                    tue.push(hours+":"+minutes);

                }else if(index==4)
                {
                    wed.push(hours+":"+minutes);

                }else if(index==5)
                {
                    thu.push(hours+":"+minutes);
                }else if(index==6)
                {
                    fri.push(hours+":"+minutes);

                }else if(index==7)
                {
                    sat.push(hours+":"+minutes);
                   
                }       

            }
      
        });

        var Emp3Hours =  Math.floor(totalMinutes / 60);
        Emp3Hours=Emp3Hours==0?"00":Emp3Hours;
        var Emp3Minutes = totalMinutes % 60;
        Emp3Minutes=Emp3Minutes==0?"00":Emp3Minutes;
        var Emp3HourMinute=Emp3Hours+":"+Emp3Minutes;
        $('#total3').text(Emp3HourMinute);
        console.log('Total Hours && minute:', Emp3HourMinute);

    }

    function marketer()
    {
        // how to find all p value associated with tr with id=Emp1
        var emp1 = document.getElementById("market");
        var emp1p = emp1.getElementsByTagName("p");
        var emp1pArray=[];
        for(var i=0;i<emp1p.length-1;i++)
        {
            emp1pArray.push(emp1p[i].innerHTML);
        }
        var totalMinutes = 0;
        // var sun=[];
        // var mon=[];
        // var tue=[];
        // var wed=[];
        // var thu=[];
        // var fri=[];
        // var sat=[];
        $.each(emp1pArray, function(index, value) {
            
            if(value!="Marketing Team")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
              if(index==1)
                {
                    sun.push(hours+":"+minutes);

                }else if(index==2)
                {
                    mon.push(hours+":"+minutes);

                }else if(index==3)
                {
                    tue.push(hours+":"+minutes);

                }else if(index==4)
                {
                    wed.push(hours+":"+minutes);

                }else if(index==5)
                {
                    thu.push(hours+":"+minutes);
                }else if(index==6)
                {
                    fri.push(hours+":"+minutes);

                }else if(index==7)
                {
                    sat.push(hours+":"+minutes);
                   
                }       

            }
      
        });
        
        var MarHours =  Math.floor(totalMinutes / 60);
        MarHours=MarHours==0?"00":MarHours;
        var MarMinutes = totalMinutes % 60;
        MarMinutes=MarMinutes==0?"00":MarMinutes;
        var MarHourMinute=MarHours+":"+MarMinutes;
        $('#totalMar').text(MarHourMinute);
        console.log('Total Hours && minute:', MarHourMinute); 
    }

    function total()
    {
        var total1=$('#total1').text();
        var total2=$('#total2').text();
        var total3=$('#total3').text();
        var totalMar=$('#totalMar').text();
        var total1Array=total1.split(":");
        var total2Array=total2.split(":");
        var total3Array=total3.split(":");
        var totalMarArray=totalMar.split(":");
        var totalHours=parseInt(total1Array[0])+parseInt(total2Array[0])+parseInt(total3Array[0])+parseInt(totalMarArray[0]);
        var totalMinutes=parseInt(total1Array[1])+parseInt(total2Array[1])+parseInt(total3Array[1])+parseInt(totalMarArray[1]);
        var totalHours=totalHours+Math.floor(totalMinutes/60);
        totalHours=totalHours==0?"00":totalHours;
        var totalMinutes=totalMinutes%60;
        totalMinutes=totalMinutes==0?"00":totalMinutes;
        var totalHourMinute=totalHours+":"+totalMinutes;
        $('#total').text(totalHourMinute);
        console.log('Total Hours && minute:', totalHourMinute);

    }

    function SundayBaseTotal()
    {
        var totalMinutes = 0;
        $.each(sun, function(index, value) {
            
            if(value!="")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
               totalMinutes += hours * 60 + minutes;
              

            }
      
        });
        
        var SunHours = Math.floor(totalMinutes / 60);
        SunHours=SunHours==0?"00":SunHours;
        var SunMinutes = totalMinutes % 60;
        SunMinutes=SunMinutes==0?"00":SunMinutes;
        var SunHourMinute=SunHours+":"+SunMinutes;
        $('#totalSun').text(SunHourMinute);
        console.log('Sun Total Hours && minute:', SunHourMinute); 

    }

    function MondayBaseTotal()
    {
        var totalMinutes = 0;
        $.each(mon, function(index, value) {
            
            if(value!="")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
              

            }
      
        });
        
        var SunHours =  Math.floor(totalMinutes / 60);
        SunHours=SunHours==0?"00":SunHours;
        var SunMinutes = totalMinutes % 60;
        SunMinutes=SunMinutes==0?"00":SunMinutes;
        var SunHourMinute=SunHours+":"+SunMinutes;
        $('#totalMon').text(SunHourMinute);
        console.log('Total Hours && minute:', SunHourMinute); 

    }

    function TusdayBaseTotal()
    {
        var totalMinutes = 0;
        $.each(tue, function(index, value) {
            console.log(tue);
            if(value!="")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
              
            }
      
        });
        
        var SunHours =  Math.floor(totalMinutes / 60);
        SunHours=SunHours==0?"00":SunHours;
        var SunMinutes = totalMinutes % 60;
        SunMinutes=SunMinutes==0?"00":SunMinutes;
        var SunHourMinute=SunHours+":"+SunMinutes;
        $('#totalTus').text(SunHourMinute);
        console.log(' Tue Total Hours && minute:', SunHourMinute); 

    }
    function WeddayBaseTotal()
    {
        var totalMinutes = 0;
        $.each(wed, function(index, value) {
            
            if(value!="")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
              

            }
      
        });
        
        var SunHours =  Math.floor(totalMinutes / 60);
        SunHours=SunHours==0?"00":SunHours;
        var SunMinutes = totalMinutes % 60;
        SunMinutes=SunMinutes==0?"00":SunMinutes;
        var SunHourMinute=SunHours+":"+SunMinutes;
        $('#totalWed').text(SunHourMinute);
        console.log('Total Hours && minute:', SunHourMinute); 

    }
    function ThudayBaseTotal()
    {
        var totalMinutes = 0;
        $.each(thu, function(index, value) {
            
            if(value!="")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
              

            }
      
        });
        
        var SunHours =  Math.floor(totalMinutes / 60);
        SunHours=SunHours==0?"00":SunHours;
        var SunMinutes = totalMinutes % 60;
        SunMinutes=SunMinutes==0?"00":SunMinutes;
        var SunHourMinute=SunHours+":"+SunMinutes;
        $('#totalThu').text(SunHourMinute);
        console.log('Total Hours && minute:', SunHourMinute); 

    }
    function FridayBaseTotal()
    {
        var totalMinutes = 0;
        $.each(fri, function(index, value) {
            
            if(value!="")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
              

            }
      
        });
        
        var SunHours = Math.floor( totalMinutes / 60);
        SunHours=SunHours==0?"00":SunHours;
        var SunMinutes = totalMinutes % 60;
        SunMinutes=SunMinutes==0?"00":SunMinutes;
        var SunHourMinute=SunHours+":"+SunMinutes;
        $('#totalFri').text(SunHourMinute);
        console.log('Total Hours && minute:', SunHourMinute); 

    }
    function SatdayBaseTotal()
    {
        var totalMinutes = 0;
        $.each(sat, function(index, value) {
            
            if(value!="")
            {
              var parts = value.split(':');
              var hours = parseInt(parts[0]);
              var minutes = parseInt(parts[1]);
              totalMinutes += hours * 60 + minutes;
              

            }
      
        });
        
        var SunHours = Math.floor( totalMinutes / 60);
        SunHours=SunHours==0?"00":SunHours;
        var SunMinutes = totalMinutes % 60;
        SunMinutes=SunMinutes==0?"00":SunMinutes;
        var SunHourMinute=SunHours+":"+SunMinutes;
        $('#totalSat').text(SunHourMinute);
        console.log('Total Hours && minute:', SunHourMinute); 

    }

    $('#generate').click(function() {
    var table = $('#EmpTask');

    var data = '';

    table.find('tr').each(function(row, tr) {
      $(tr).find('td,th').each(function(col, td) {
        data += $(td).text() + '\t';
      });
      data += '\n';
    });

    var link = document.createElement('a');
    link.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(data));
    link.setAttribute('download', 'table_data.txt');
    link.style.display = 'none';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
  });

    

</script>
</html>