<form action="request.php" method="post">
    
    Mobile number: <input type="number" name="no" value="" size="10" /> <br><br>
    Current city :<input type="text" name="cc"> <br><br>
    Destination city :<input type="text" name="dc"><br><br> 
    Date of issue :<input type="date" name="doi"><br><br> 
    Date of return :<input type="date" name="dor"><br><br> 
    Distance :<input type="number" name="distance">(approx. in KMs)<br><br> 
    <label>Car :</label>
             <select name="carid">
               <option value = "1">Bolero</option>
               <option value = "2">Scorpio</option>
               <option value = "3">Innova</option>
               <option value = "4">Indica</option>
               <option value = "5">Baleno</option>
               <option value = "6">Alto 800</option>
               <option value = "7">i20</option>
               <option value = "8">Santro</option>
               <option value = "9">Honda City</option>
               <option value = "10">Dzire</option>
               <option value = "11">WagonR</option>
               <option value = "12">Kwid</option>
               <option value = "13">Ciaz</option>
               <option value = "14">Verna</option>
               <option value = "15">Tiago</option>
               <option value = "16">Kwid</option>
               <option value = "17">Brezza</option>
             </select><br><br>
    Any special requests : <textarea name="sprq" rows="4" cols="20">
    </textarea><br><br>
    Driver license number : <input type="text" name="dln" value="" size="15" /><br><br>
    <input type="submit" value="SUBMIT REQUEST" />
</form>
