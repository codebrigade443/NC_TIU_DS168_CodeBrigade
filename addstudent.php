<?php
include 'header.php';
?>

<body>

    <h1 class='main_heading'> Add Student Details</h1>

    <form action='server.php' style='margin-left:250px;  width:75%; margin-top:100px'>
        <input type='text' class='input_stxt' style='width:660px' name='a' placeholder='Name'>
        <input type='text' class='input_stxt' style='margin-left:50px' name='b' placeholder='Hall Ticket Number'> <br>
        <input type='text' class='input_stxt' name='c' placeholder="Father's Name">
        <input type='text' class='input_stxt' style='margin-left:50px' name='d' placeholder="Mother's Name">
        <input type='text' class='input_stxt' style='margin-left:50px' name='e' placeholder='Date of Birth'> <br>
        <input type='text' class='input_stxt' name='f' placeholder='Date of Adminssion'>
        <!-- <input type = 'text' class = 'input_stxt' style = 'margin-left:50px' name = 'a' placeholder = 'Course'> -->
        <select style='margin-left:50px' name='g' class='input_stxt'>
            <option value=''>Select Course</option>
            <option value='B.Com - General'>B.Com - General</option>
            <option value='B.Com - Honours'>B.Com - Honours</option>
            <option value='B.Sc'>B.Sc</option>
        </select>
        <input type='text' class='input_stxt' style='margin-left:50px' name='h' placeholder='Last Class Attented'> <br>
        <select name='i' class='input_stxt'>
            <option value=''>Course Complted</option>
            <option value='1'>Yes</option>
            <option value='2'>No</option>
            <option value='3'>Debared/Resticated</option>
        </select> <br>
        <input type='text' style='width:1020px' class='input_stxt' name='j' placeholder='General Conduct'>

        <button class='ssbt_btn' style='float:right' name='addstud'> Login </button>

    </form>
</body>