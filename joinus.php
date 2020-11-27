<?php include("header.php");?>
<?php include("navbar.php");?>
<div class="card card_join_us">
    <div class="container">
    <br>
    <div class="row">
        <div class="badge badge-primary submenu_page_title">
            पंजीकरण पत्रक
        </div>
    </div> 
    <br>
    <div class="card">
        <div class="card-header">
            बहनों की माहिती (Information Of Lady)
        </div>
        <br>
        <form>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="नाम (name)" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="भ्रमणभाष (Mobile No.)" require>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <input class="form-control" id="date" name="date" placeholder="जन्मदिनांक (Birth Date) (MM/DD/YYY)" type="text" require/>
                </div>
                <div class="col">
                    <input class="form-control" id="date" name="date" placeholder="जन्मतिथि" type="text"/>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="वजन (weight)" require>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="ऊंचाई (height)" require>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="अभ्यास (Study)">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="रूचि के विषय (Hobbies)">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="व्यवसाय (Occupation)">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="व्यवसाय प्रकार (Type of Occupation)">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="व्यसन (Addiction)">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="गोत्र (स्त्री के पिता का गोत्र)">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="लग्न दिनांक (Date of Marriage)">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="लग्न तिथि">
                </div>
            </div>
            <br>
            
                
                <div class="form-row">
                    <div class="col-1"></div>
                    <div class="col-3">
                        <label class="form_field_card">
                         माँ बनने का प्रथम अवसर है ?
                     </label>
                    </div>
                    <div class="form-check form-check-inline col-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio_lady_1" value="yes">
                        <label class="form-check-label form_field_card"" for="inlineRadio1">हां</label>
                    </div>
                    <div class="form-check form-check-inline col-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="radio_lady_2" value="no" >
                        <label class="form-check-label form_field_card" for="inlineRadio2">ना</label>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="कैसी भावना महसूस कर रहे हो ?">
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <input type="text" id="disabledTextInput_1" class="form-control" placeholder="प्रथम संतान का प्रसूति का प्रकार(प्रश्न आप से सम्बंधित हो तो)">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="text" id="disabledTextInput_2" class="form-control" placeholder="द्वितीय संतान का प्रसूति का प्रकार (प्रश्न आप से सम्बंधित हो तो)">
                        </div>
                    </div>
                </div>  
                <div class="form-row form_field_card">
                    <div class="col-4">
                        <label class="form-check-label" for="inlineRadio1" class="form_field_card">कोई वारसागत(जिनेटिक) त्रुटि है ?</label>
                    </div>   
                    <div class="form-check form-check-inline col-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="genetic_error_1" value="yes">
                        <label class="form-check-label" for="inlineRadio1" class="form_field_card">हां</label>
                    </div>
                    <div class="form-check form-check-inline col-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="genetic_error_2" value="no" >
                        <label class="form-check-label" for="inlineRadio2" class="form_field_card">ना</label>
                    </div>
                    <div class="col-4"></div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <input type="text" id="disabledTextInput_1" class="form-control" placeholder="डायाबिटिज़,चर्मरोग,हृदयरोग आदि बीमारी है ?">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="text" id="disabledTextInput_2" class="form-control" placeholder="अगर है तो पहले कोई सारवर की है ? क्या ?">
                        </div>
                    </div>
                </div> 

            <br>
            
            
        </form>
        <br>
    </div>
    </div>

</div>
   
<?php include("footer.php");?>