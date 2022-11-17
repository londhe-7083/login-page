<!-- design html form to show the user list of text fonts and sizes -->
<!DOCTYPE html>
<html>
    <body>
        <h1> designing forms with list<h1>
            <form> 
                <label for="enter string "> enter string:</label>
                <input type=text><br><br>
                
                <label for="select_font"> select font :</label>
                <input list="select_font" name="font" id="font">
                <datalist id="select_font">
                    <option value="arial">
                    <option value="calibri">
                    <option value="times new roman">
                    <option value="verdena">
                </datalist>
                <br><br>

                <label for="font_size"> select font size:</label>
                <input list="font_size" name="size" id="size">
                <datalist id="font_size">
                    <option value="12">
                    <option value="13">
                    <option value="14">
                    <option value="15">
                    <option value="16">
                </datalist>
            </form>
        </body>
        </html>


        
