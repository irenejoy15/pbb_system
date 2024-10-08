<html>
    <head>
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">
        <style>
            /** Define the margins of your page **/
            @page {
                margin: 20px 25px;
            }

            @font-face {
                font-family: "source_sans_proregular";           
                src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
                font-weight: normal;
                font-style: normal;
            }        
            body{
                font-family: "source_sans_proregular","sans-serif";            
            }

            body {
                margin-top: .1cm;
                margin-left: 0cm;
                margin-right: 0cm;
                margin-bottom: .1cm;
            }
             .pdf th, .pdf td {
             border: 1px solid;
            }

            .pdf{
                border-collapse: collapse;
                font-size:14px;
            }
            .irene_class{
                font-size: 8px !important;
            }
            .irene_border{
                border:1px solid black;
            }
            .text-center{
                text-align: center;
            }
            table{ border-collapse: collapse; } 
            .irene-table {
                border-left: 0.01em solid #ccc;
                border-right: 0;
                border-top: 0.01em solid #000000;
                border-bottom: 0;
                border-collapse: collapse;
            }
            .irene-table td,
            .irene-table th {
                border-spacing: 0;
                border-left: 0;
                border-right: 0.01em solid #000000;
                border-top: 0;
                border-bottom: 0.01em solid #000000;
            }
            .irene-font-size{
                font-size: 12px;
            }
            .irene-padding-7{
                padding-top:7px;
                padding-bottom:7px;
            }
            .irene-20{
                width:20%; 
                border:1px solid black;
            }
            .irene-25{
                width: 25%;
                border:1px solid black;
            }
            .irene-50{
                width: 50%;
                border:1px solid black;
            }
            .irene-80{
                width: 80%;
                border:1px solid black;
            }
            .irene-100{
                width: 100%;
                border:1px solid black;
            }
            .font-weight-bold{
                font-weight: bold;
            }
            .bypass-no-border{
                border:none !important;
            }
            .irene_absolute{
                position: relative; 
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                text-align: center;
            }
            .bypass_relative{
                position: absolute !important;
            }
        </style>
    </head>
    <body>
        <?php 
            $count = 1;    
        ?>
        
            <table cellspacing='0' cellpadding="0" style="width:100%;">
                <thead>
                    <th style="width:20%;"></th>
                    <th style="width:20%;"></th>
                    <th style="width:20%;"></th>
                    <th style="width:20%;"></th>
                    <th style="width:20%;"></th>
                    <th style="width:20%;"></th>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align:center; border: 1px solid black;">
                            <img src="{{asset('images/PBB_LOGO.png')}}" style="padding:7px 0px; width: 65px;">
                        </td>
                        <td colspan="5" style="text-align:center; border: 1px solid black; font-weight: bold; font-size:16px;">
                            TURNOVER FORM
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding:12px;" colspan="6">
                            <b>(Warehouse Copy)</b>
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: center; padding:12px;" colspan="4">
                        </td>
                        <td style="text-align: center;">
                            Reference No:
                        </td>
                        <td style="text-align:center; border-bottom:1px solid black;">
                            FG0824010
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="font-size:5px;" colspan="6">&nbsp;</td>
                    </tr>
                </tbody>
            </table>

            <table class="irene-table" cellspacing='0' cellpadding="2" style=" border-collapse: collapse;border:2px solid black; width:100%;">
                <tr> 
                    <td colspan="6" class="irene-100"  style="background-color:#c0c0c0; text-align:center; font-weight:bold;">Turnover Details</td>
                </tr>
                <tr>
                    <td class="irene_border irene-20 font-weight-bold">Date</td>
                    <td class="irene_border text-center irene-80" colspan="5">August 13,2024</td>
                </tr>
                <tr>
                    <td class="irene_border irene-20 font-weight-bold" style="width: 20%; font-weight:bold;">Time</td>
                    <td class="irene_border text-center irene-80" colspan="5">8:00 AM</td>
                </tr>
                <tr>
                    <td class="irene_border irene-20 font-weight-bold">Location</td>
                    <td class="irene_border text-center irene-80" colspan="5">Holding Area</td>
                </tr>
                <tr>
                    <td class="irene_border irene-20 font-weight-bold">Pallet Count</td>
                    <td class="irene_border text-center irene-80" colspan="5">63</td>
                </tr>
               
            </table>
            <p style="margin-top:0px;"></p>
            {{-- JOB DETAILS --}}
            <table class="irene-table" cellspacing='0' cellpadding="2" style=" border-collapse: collapse;border:2px solid black; width:100%;">
                <tr> 
                    <td class="irene-100 text-center font-weight-bold" colspan="6" style="background-color:#c0c0c0;">Job Details</td>
                </tr>
                {{-- DITO MAGLALAGAY NG FOREACH  --}}
                @for ($x = 1; $x <= 9; $x++)
                    <tr>
                        <td class="irene-20 font-weight-bold irene-padding-7">
                            Job No(s)
                        </td>
                        <td class="irene-20 text-center irene-padding-7">
                            207
                        </td>
                        <td class="irene-20 text-center irene-padding-7">
                            207
                        </td>
                        <td class="irene-20 text-center irene-padding-7">
                            207
                        </td>
                        <td class="irene-20 text-center irene-padding-7">
                            207
                        </td>
                        <td class="irene-20 text-center irene-padding-7">
                            207
                        </td>
                    </tr>
                @endfor
                {{-- END DITO MAGLALAGAY NG FOREACH  --}}
            </table>
            <p style="margin-top:0px;"></p>
            {{-- REMARKS --}}
            <table class="irene-table" cellspacing='0' cellpadding="2" style=" border:2px solid black; width:100%;">
                <tr> 
                    <td class="irene-100 text-center font-weight-bold" colspan="2" style="background-color:#c0c0c0;">REMARKS</td>
                </tr>
                <tr>
                    <td class="irene-50">
                        <table class="irene-100 bypass-no-border" cellspacing='0' cellpadding="2" style="height: 150px;">
                            <tr>
                                <td colspan="4" class="irene-font-size irene-100 font-weight-bold text-center bypass-no-border">
                                    JOB-207 AQL02 - 500 ML
                                </td>
                            </tr>
                            {{-- FOR LOOP --}}
                            @for ($x = 1; $x <= 6; $x++)
                            <tr>
                                <td class="irene-25 bypass-no-border irene-font-size">
                                    Total:
                                </td>
                                <td class="irene-25 bypass-no-border text-center irene-font-size">
                                    4000
                                </td>
                                <td class="irene-25 bypass-no-border text-center irene-font-size">
                                    cases
                                </td>
                                <td class="irene-25 bypass-no-border text-center irene-font-size">
                                    Micro Result
                                </td>
                            </tr>
                            {{-- END FOR LOOP --}}
                            @endfor
                        </table>
                    </td>
                    <td class="irene-50 text-center">
                        <img src="{{asset('images/received_warehouse.png')}}" class="irene_absolute" style="width: 50%;">
                        <div class="irene_absolute font-weight-bold" style="margin-top:-70px; margin-left:4px; color:#c71a1e; font-size:19px;" >
                            SEPT 19, 2024
                        </div>
                    </td>
                </tr>
            </table>
            <p style="margin-top:0px;"></p>
            {{-- NOTES DETAILS --}}
            <table class="irene-table" cellspacing='0' cellpadding="2" style="border-collapse: collapse;border:2px solid black; width:100%;">
                <thead>
                    <tr> 
                        <td class="irene-100 text-center font-weight-bold" colspan="5" style="background-color:#c0c0c0;">NOTES</td>
                    </tr>
                    <tr style="font-size:12px; ">
                        <th class="irene-20 font-weight-bold text-center">PIC</th>
                        <th class="irene-20 font-weight-bold text-center">QA/QC</th>
                        <th class="irene-20 font-weight-bold text-center">Production Supervisor</th>
                        <th class="irene-20 font-weight-bold text-center">Warehouse</th>
                        <th class="irene-20 font-weight-bold text-center">Production Manager</th>
                    </tr>
                </thead>
                <tbody>
                   
                  
                    <tr>
                        <td class="irene-20 font-weight-bold text-center" style="font-size: 12px;">
                            <img src="{{asset('images/test_sig.png')}}" style="width: 150px;"><br>
                            CEFRIAN TRINCHERA
                        </td>
                        <td class="irene-20 font-weight-bold text-center" style="font-size: 12px;">
                            <img src="{{asset('images/test_sig.png')}}" style="width: 150px;"><br>
                            CEFRIAN TRINCHERA
                        </td>
                        <td class="irene-20 font-weight-bold text-center" style="font-size: 12px;">
                            <img src="{{asset('images/test_sig.png')}}" style="width: 150px;"><br>
                            CEFRIAN TRINCHERA
                        </td>
                        <td class="irene-20 font-weight-bold text-center" style="font-size: 12px;">
                            <img src="{{asset('images/test_sig.png')}}" style="width: 150px;"><br>
                            CEFRIAN TRINCHERA
                        </td>
                        <td class="irene-20 font-weight-bold text-center" style="font-size: 12px;">
                            <img src="{{asset('images/test_sig.png')}}" style="width: 150px;"><br>
                            CEFRIAN TRINCHERA
                        </td>
                    </tr>
                </tbody>
               
            </table>
            <br>
            <p class="font-weight-bold" style="text-align: right; font-size:9px;">PBB-BP-PR-FO-018 Rv01_04 Jan 2021</p>
    </body>
</html>