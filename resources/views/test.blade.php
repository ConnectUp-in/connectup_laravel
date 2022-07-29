<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <title>
        Image Upload - Drag Drop Crop
    </title>
    <style>
        body {
            text-align: center;
            margin-top: 20px;
        }

        .content {
            text-align: left;
            width: 800px;
            border: solid 5px #CBCAC6;
            background-color: #f9f9f9;
            padding: 20px 20px 40px 20px;
            font-family: Segoe UI, Arial, Verdana, Helvetica, sans-serif;
            font-size: 80%;
            margin: 0 auto;
        }

        #imagecontainer {
            margin-top: 40px;
            margin-bottom: 20px;
            padding: 100px 0 80px 0;
            text-align: center;
            border: dashed 3px gray;
            background-image: url('images/drag-and-drop-image2.png');
            background-repeat: no-repeat;
            background-position: 50% 40px;
            width: 650px;
            height: 400px;
        }

        #imagecontainer p {
            font-size: 16px;
        }

        #InsertButton {
            -moz-box-shadow: 0px 10px 40px -14px #3e7327;
            -webkit-box-shadow: 0px 10px 40px -14px #3e7327;
            box-shadow: 0px 10px 40px -14px #3e7327;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77b55a), color-stop(1, #72b352));
            background: -moz-linear-gradient(top, #77b55a 5%, #72b352 100%);
            background: -webkit-linear-gradient(top, #77b55a 5%, #72b352 100%);
            background: -o-linear-gradient(top, #77b55a 5%, #72b352 100%);
            background: -ms-linear-gradient(top, #77b55a 5%, #72b352 100%);
            background: linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#77b55a', endColorstr='#72b352', GradientType=0);
            background-color: #77b55a;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            border: 1px solid #4b8f29;
            display: inline-block;
            cursor: pointer;
            color: #ffffff;
            font-family: Arial;
            font-size: 18px;
            font-weight: bold;
            padding: 9px 27px;
            text-decoration: none;
            text-shadow: 0px 1px 0px #5b8a3c;
        }

        #InsertButton:hover {
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #72b352), color-stop(1, #77b55a));
            background: -moz-linear-gradient(top, #72b352 5%, #77b55a 100%);
            background: -webkit-linear-gradient(top, #72b352 5%, #77b55a 100%);
            background: -o-linear-gradient(top, #72b352 5%, #77b55a 100%);
            background: -ms-linear-gradient(top, #72b352 5%, #77b55a 100%);
            background: linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#72b352', endColorstr='#77b55a', GradientType=0);
            background-color: #72b352;
        }

        #InsertButton:active {
            position: relative;
            top: 1px;
        }

        select {
            width: 400px;
        }

        fieldset {
            background-color: White;
        }
    </style>
</head>

<body>
    <form method="post" action="./Image-Drag-Drop2.aspx" id="form1">
        <div class="aspNetHidden">
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                value="/wEPDwULLTE5NTM2NzcyNzUPZBYCAgEPZBYCAgMPD2QWAh4Hb25jbGljawUbcmV0dXJuIHN1Ym1pdGJ1dHRvbl9jbGljaygpZGSGc3s0J/gFC2o5kSbulj/7HsM7O7aWTSrp/vU5fBQf1Q==" />
        </div>

        <div class="aspNetHidden">

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="2C7BBC9A" />
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                value="/wEdAAMu+R6S7TDI5zRDg0zJstayGoQt4DrLUnvt3JsmvAn7gA/+MqK/9iYZ4AwxFKjgcvekSV3X0ajnQy0KYkZKmGe6eVVbEwPjrv3zt31HUFOe1Q==" />
        </div>
        <div class="content">
            <h2>Drag and drop & Image Crop (w/a different UI)</h2>
            <p>
                A sample demonstrates how to drag drop photo and crop it before upload.
            </p>


            <div id="imagecontainer" style="position: relative;">

                <p>
                    <button id="InsertButton">Choose file to Upload</button>
                </p>
                <p>Or drop image file here</p>

            </div>


            <style>
                .uploaderattachments {
                    border-collapse: separate !important;
                }

                .uploadergrid {
                    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                    background: #fff;
                    border-collapse: separate;
                    text-align: left;
                    border: 1px solid #DDDDDD;
                    border-radius: 5px;
                    margin: 8px 0;
                }

                .uploadergrid td,
                .uploadergrid th {
                    padding: 6px 0px 6px 5px;
                    color: #333333;
                    font-size: 14px;
                    border-bottom: 1px solid #EFEFEF;
                    font-weight: normal;
                }

                .uploadergrid td:last-child,
                .uploadergrid th:last-child {
                    padding-right: 5px;
                }

                .uploadergrid td:first-child {
                    border-left: none;
                }

                .uploadergrid tr:last-child td {
                    border-bottom: none;
                }

                .uploadergrid tr:first-child td:first-child,
                .uploadergrid tr:first-child th:first-child {
                    border-top-left-radius: 5px;
                }

                .uploadergrid tr:last-child td:first-child,
                .uploadergrid tr:last-child th:first-child {
                    border-bottom-left-radius: 5px;
                }

                .uploadergrid tr:first-child td:last-child,
                .uploadergrid tr:first-child th:last-child {
                    border-top-right-radius: 5px;
                }

                .uploadergrid tr:last-child td:last-child,
                .uploadergrid tr:last-child th:last-child {
                    border-bottom-right-radius: 5px;
                }

                .uploaderprogress {}

                .uploaderprogresstext {
                    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                    font-size: 13px;
                    text-align: center;
                    vertical-align: middle;
                    margin-top: 2px;
                }

                .uploaderprogressinfotext {
                    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
                    font-size: 13px;
                    padding: 4px 1px;
                }

                .uploaderprogressclassic {
                    border: 1px solid #bbbbbb;
                    background-color: #e7e7e7;
                    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                }

                .uploaderprogressmodern {
                    background-color: #e7e7e7;
                    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
                    border: 1px solid #bbbbbb;
                }

                .uploaderprogressmodern .uploaderprogressleft {
                    background-color: #337ab7;
                }

                .uploaderprogressmodern .uploaderprogressright {}
            </style>
            <input id="Uploader1" name="Uploader1" type="hidden" autocomplete="off" /><img UniqueID="Uploader1"
                Namespace="CuteWebUI" Root="/" VerTicks="635833903707625570"
                FileTooLargeMsg="{0} cannot be uploaded!

File size ({1}) is too large. The maximum file size allowed is set to: {2}."
                MaxFilesLimitMsg="The maximum number of files allowed to be uploaded is set to {0}."
                WindowsDialogLimitMsg="Unable to select so many files at once. The total file name length cannot exceed 32kb."
                CancelUploadMsg="Cancel upload" CancelAllMsg="Cancel all Uploads" UploadingMsg="Uploading.."
                UploadAddonButtonMode="Auto" UploadType="Auto" UploadCursor="Auto" ManualStartUpload="1"
                ShowProgressBar="1" ShowProgressInfo="1" PanelWidth="360" BarHeight="20"
                InfoStyle="padding-left:3px;font:normal 12px Tahoma;" BarStyle="Continuous" BorderStyle=""
                PostBackEventReference="__doPostBack(&#39;Uploader1&#39;,&#39;&#39;)" InsertButtonID="InsertButton"
                CancelButtonID="Uploader1__Cancel" ProgressTextID="Uploader1__ProgressText"
                ProgressCtrlID="Uploader1__Progress" DropZoneID="imagecontainer" MaxSizeKB="10240"
                InsertText="Upload a file" InputboxCSSText=""
                ContextValue="Bsjxc5WUMoW!30O3xtSTNOF7oj2CLdOiGpDCzpkh9KOAXiBjXiHDRx0JGPtqLCSR0CWk60!3mEGTM!2"
                ServerLang="AspNet" id="Uploader1Image" ResourceHandler="/CuteWebUI_Uploader_Resource.axd"
                onload="this.style.display=&quot;none&quot; ; if(!window.CuteWebUI_AjaxUploader_Initialize){var xh=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject(&#39;Microsoft.XMLHttp&#39;);xh.open(&#39;GET&#39;,&#39;/CuteWebUI_Uploader_Resource.axd?type=script&amp;_ver=635833903707625570&#39;,false);xh.send(&#39;&#39;);eval(xh.responseText)}CuteWebUI_AjaxUploader_Initialize(this.id);"
                onerror="this.onload()" src="/CuteWebUI_Uploader_Resource.axd?type=file&amp;file=continuous.gif"
                style="display:none;" />
            <div id="Uploader1__Progress" style="display:none;">
                <span id="Uploader1__ProgressText">Uploading...</span><input type="submit" name="Uploader1$_Cancel"
                    value="Cancel" id="Uploader1__Cancel" />
            </div>

            <p>
                <input type="submit" name="SubmitButton" value="Submit" onclick="return submitbutton_click();"
                    id="SubmitButton" />
            </p>
            <p>
                <select size="4" name="ListBoxEvents" id="ListBoxEvents">

                </select>
            <div id="uploadedlinks">

            </div>
            </p>

        </div>

        <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['form1'];
            if (!theForm) {
                theForm = document.form1;
            }

            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
            //]]>
        </script>

    </form>


    <script type="text/javascript">
        //prevent the default handling by cancelling the event
        document.ondragover = document.ondragenter = document.ondrop = function(e) {
            e.preventDefault();
            return false;
        }



        // NOTE : Both WebForms/MVC Uploader use the same JavaScript API

        var uploader;

        function CuteWebUI_AjaxUploader_OnInitialize() {
            uploader = this; //get uploader object
            uploader.internalobject.SetDialogAccept("image/*");
        }


        var fileuploaded = false;
        var submitbutton = document.getElementById('SubmitButton');

        function submitbutton_click() {

            //return true and submit form if event is triggered by submitbutton.click
            if (fileuploaded)
                return true;

            //start uploading after file selection
            if (uploader.getqueuecount() > 0) {
                uploader.startupload(); //Start the upload of all queued files
            } else {
                alert("Please browse files for uploading");
            }
            //prevent form submission on button click event
            return false;
        }

        //Fires after all uploads are complete and submit the form
        function CuteWebUI_AjaxUploader_OnPostback() {
            fileuploaded = true;

            //use submitbutton to submit the form
            submitbutton.click();

            //return false to cancel the default form submission
            return false;
        }

        //Fires when files are selected successfully.
        function CuteWebUI_AjaxUploader_OnSelect(files) {
            var task = files[0];
            //Retrieve a list of file items defined by HTML5 <input type=file/>
            var srcfile = task.GetDomFile();
            if (!srcfile || srcfile.type.indexOf("image/") != 0)
                return;

            //if the browse don't support
            if (!window.Uint8Array || !window.ArrayBuffer)
                return;

            var div = document.getElementById("imagecontainer");
            div.style.display = "block";

            var option = {};
            //specify a file object for <input type=file/>
            option.file = srcfile;
            //specify an element for UI container 
            option.container = div;
            //specify the container padding
            option.padding = 5;
            //When square is set to false, uploader will use rectangular crop-area.
            option.square = false;
            //set the minimum width of an element
            option.minWidth = 64;
            //set the minimum height of an element
            option.minHeight = 64;

            //Fires after a file gets processed
            option.onchange = function(newfile, dataurl, width, height) {

                //use this function to overwrite the uploader file
                task.OverrideDomFile(newfile);

                document.title = width + "x" + height + "," + newfile.size + " bytes";
            }

            uploader.cropper(option);

        }
    </script>

</body>

</html>
