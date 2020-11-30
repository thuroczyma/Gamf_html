<?php 
if (isset ($_GET['email']))
{
    ?>
    <script> 
    alert("We have processed your order!");
    location.href='http://localhost/homework/';
    </script>
    <?php 
}
else
{?>

<h2>Let's rent a Pet</h2>
<body>
    <form action="./templates/pages/rent.tpl.php" method="get" target="">
            <label>Name: <input type="text" class="short" name="contact" id="name" maxlength="50"></label><br>
            <label>E-mail: <input type="text" class="short" name="email" id="email" required"></label><br>
            <label>Pohone: <input type="text" class="short" name="pohone" value="" id="phone" required pattern="[0-9]{9}"></label><br>
            <label>Street: <input type="text" class="short" name="street1" value="" id="street1" required  maxlength="40"></label><br>
            <label>City: <input type="text" class="short" name="city" value="" id="city" required pattern="[' '\-a-zA-Z]+"></label><br>
            <label>Province: <input type="text" class="short" name="province" value="" id="province" required pattern="[' '\-a-zA-Z]+"></label><br>
            <label>Postal code: <input type="text" class="short" name="postal" value="" id="postal" required pattern="[0-9]{4,6}"></label><br>
            <?php $price = 30?>
            <label>Pet: <select>
                <option value="" selected disabled hidden>Choose here</option>
                <option <?php  if(isset($_GET['name'])&& $_GET["name"] == "buddy") echo "selected";?> value="Buddy">Buddy </option> 
                <option <?php  if(isset($_GET['name'])&& $_GET["name"] == "szimba") echo "selected";?> value="Szimba">Szimba</option>
                <option <?php  if(isset($_GET['name'])&& $_GET["name"] == "pici") echo "selected";?> value="Pici">Pici</option>
                <option <?php  if(isset($_GET['name'])&& $_GET["name"] == "hopihe") echo "selected";?> value="Hopihe">Hopihe</option>
                </select></label>
                <br>
                <a>Cost: </a> <?php echo "$price"?><a> $</a>
                <br>
                <a>With equiptent</a>
                <input type="checkbox" name="multi" value="1">
                <br>
            <input value="Rent" type="submit">
            <br>
        </form>
</body>
<?php }?>