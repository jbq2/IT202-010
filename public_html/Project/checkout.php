<?php 
require_once(__DIR__ . "/../../partials/nav.php");

if(!is_logged_in()){
    flash("You must be logged in to purchase any items", "warning");
    die(header("Location: login.php"));
}

$userID = get_user_id();

$db = getDB();
$statement = $db->prepare("SELECT * FROM Cart WHERE user_id = :userID");
try{
    $statement->execute([":userID" => $userID]);
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    if(count($results) == 0){
        flash("You have nothing in your cart yet", "info");
        die(header("Location: cart_page.php"));
    }
    else{
        //proceed with filling cart
    }
}
catch(PDOException $e){
    flash("Query error", "danger");
}

$countries = array("United States", "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
$states = array(
	'AL'=>'ALABAMA',
	'AK'=>'ALASKA',
	'AS'=>'AMERICAN SAMOA',
	'AZ'=>'ARIZONA',
	'AR'=>'ARKANSAS',
	'CA'=>'CALIFORNIA',
	'CO'=>'COLORADO',
	'CT'=>'CONNECTICUT',
	'DE'=>'DELAWARE',
	'DC'=>'DISTRICT OF COLUMBIA',
	'FM'=>'FEDERATED STATES OF MICRONESIA',
	'FL'=>'FLORIDA',
	'GA'=>'GEORGIA',
	'GU'=>'GUAM GU',
	'HI'=>'HAWAII',
	'ID'=>'IDAHO',
	'IL'=>'ILLINOIS',
	'IN'=>'INDIANA',
	'IA'=>'IOWA',
	'KS'=>'KANSAS',
	'KY'=>'KENTUCKY',
	'LA'=>'LOUISIANA',
	'ME'=>'MAINE',
	'MH'=>'MARSHALL ISLANDS',
	'MD'=>'MARYLAND',
	'MA'=>'MASSACHUSETTS',
	'MI'=>'MICHIGAN',
	'MN'=>'MINNESOTA',
	'MS'=>'MISSISSIPPI',
	'MO'=>'MISSOURI',
	'MT'=>'MONTANA',
	'NE'=>'NEBRASKA',
	'NV'=>'NEVADA',
	'NH'=>'NEW HAMPSHIRE',
	'NJ'=>'NEW JERSEY',
	'NM'=>'NEW MEXICO',
	'NY'=>'NEW YORK',
	'NC'=>'NORTH CAROLINA',
	'ND'=>'NORTH DAKOTA',
	'MP'=>'NORTHERN MARIANA ISLANDS',
	'OH'=>'OHIO',
	'OK'=>'OKLAHOMA',
	'OR'=>'OREGON',
	'PW'=>'PALAU',
	'PA'=>'PENNSYLVANIA',
	'PR'=>'PUERTO RICO',
	'RI'=>'RHODE ISLAND',
	'SC'=>'SOUTH CAROLINA',
	'SD'=>'SOUTH DAKOTA',
	'TN'=>'TENNESSEE',
	'TX'=>'TEXAS',
	'UT'=>'UTAH',
	'VT'=>'VERMONT',
	'VI'=>'VIRGIN ISLANDS',
	'VA'=>'VIRGINIA',
	'WA'=>'WASHINGTON',
	'WV'=>'WEST VIRGINIA',
	'WI'=>'WISCONSIN',
	'WY'=>'WYOMING',
);


?>

<div>
    <h1 style="margin-bottom: 30px">Checkout</h1>
    <form onsubmit="return validate(this)" method="POST" >
        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="fname">First Name </label>
            <input type="text" name="fname">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="lname">Last Name </label>
            <input type="text" name="lname">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="address">Address </label>
            <input type="text" name="address">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="apartment">Apartment </label>
            <input type="text" name="apartment">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="city">City </label>
            <input type="text" name="city">
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="state">State/Province </label>
            <select name="state">
                <?php foreach($states as $state) : ?>
                    <option class="stateOption" id="<?php se($state, "name") ?>" name="states[]" value="<?php se($state, "name") ?>"> <?php se(ucwords(strtolower($state)), "name") ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="country">Country </label>
            <select name="country">
                <?php foreach($countries as $country) : ?>
                    <option id="<?php se($country, "name") ?>" name="countries[]" value="<?php se($country, "name") ?>" > <?php se($country, "name") ?> </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="orderDetailsForm">
            <label class="orderDetailsLabel" for="zip">ZIP Code </label>
            <input type="text" name="zip">
        </div>

        <div class="orderDetailsForm">
            <input style="margin-left:0px" type="submit" value="Proceed" />
        </div>
    </form>
</div>

<script>
    function validate(form){
        let fn = form.fname.value;
        let ln = form.lname.value;
        let addr = form.address.value;
        let aprt = form.apartment.value;
        let city = form.city.value;
        let zip = form.zip.value;
        let isValid = true;

        if(fn.length == 0 || !/\b([A-Za-zÀ-ÿ][-,a-z. ']+[ ]*)+/.test(fn)){
            flash("Invalid first name", "warning");
            isValid = false;
        }

        if(ln.length == 0 || !/\b([A-Za-zÀ-ÿ][-,a-z. ']+[ ]*)+/.test(ln)){
            flash("Invalid last name", "warning");
            isValid = false;
        }

        if(!/^(\d+) ?([A-Za-z](?= ))? (.*?) ([^ ]+?) ?((?<= )APT)? ?((?<= )\d*)?$/.test(addr)){
            flash("Invalid address", "warning");
            isValid = false;
        }

        if(city.length == 0 || !/\b([A-Za-zÀ-ÿ][-,a-z. ']+[ ]*)+/.test(city)){
            flash("Invalid city", "warning");
            isValid = false;
        }

        if(aprt.length != 0){
            if(!/[1-9]{0,1}[0-9]{0,1}[0-9]$/.test(aprt)){
                flash("Invalid apartment number", "warning");
                isValid = false;
            }
        }

        if(!/[0-9]{5}/.test(zip)){
            flash("Invalid ZIP code", "warning");
            isValid = false;
        }

        return isValid;
    }
</script>

<style>
    .orderDetailsForm{
        display:block;
    }
</style>

<?php 
require(__DIR__ . "/../../partials/flash.php")
?>