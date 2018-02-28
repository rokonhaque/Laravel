<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
     <form action="{{url('/calc')}}" method="post">
         {{csrf_field()}}
         <table>
         <tr>
             <td>First Number</td>
             <td><input type="number" name="firstnumber" value="enter your number" /></td>
         </tr>
         <tr>
             <td>Second Number</td>
             <td><input type="number" name="secondnumber" value="enter your number"/></td>
         </tr>
         <tr>
             <td>Result</td>
             <td><input type="text"/></td>
         </tr>
         <tr>

             <td></td>
             <td>
                 <input type="submit" name="btn" value="+"/>
                 <input type="submit" name="btn" value="-"/>
                 <input type="submit" name="btn" value="*"/>
                 <input type="submit" name="btn" value="/"/>
                 <input type="submit" name="btn" value="%"/>

             </td>
         </tr>
     </table>
     </form>

</body>

</html>