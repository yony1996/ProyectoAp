<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <title>Ficha Médica</title>
    <style type="text/css" media="screen">
        @page {
            margin: 0;
        }

        body {
            font-family: "Times New Roman", serif;
        }

        .header {
            display: block;
            margin-bottom: 5px;
        }

        .conter {
            width: 5px;
            height: 5px;
            margin-left: 80px;
        }

        .img {

            width: 100px;
            height: 100px;
        }

        .title {
            flex-direction: column;
            margin-top: 35px;
            font-size: 30px;
            text-align: center;
        }



        #watermark {
            position: fixed;
            bottom: 200px;


            /** El ancho y la altura pueden cambiar
                    según las dimensiones de su membrete
                **/
            width: 20cm;
            height: 20cm;

            /** Tu marca de agua debe estar detrás de cada contenido **/
            z-index: -1000;


        }

        #watermark img {
            opacity: 0.3;
        }

        .page-break {
            page-break-after: always;
        }

    </style>
</head>
<body>
    <div id="watermark">
        <img src="{{public_path('dists/assets/img/logo-removebg-preview.png')}}" height="100%" width="100%" />
    </div>
    <div class="header">
        <div class="conter">
            <img class="img" src="{{public_path('dists/assets/img/logo-removebg-preview.png')}}" height="10%" width="10%" alt="">
        </div>
        <div class="title">
            Ficha Médica
        </div>
    </div>
    <div style="text-align:center">
        <table cellspacing="0" cellpadding="0" class="TableGrid" style="height:auto;margin-top:10px ;width:100%; margin-right:50px; margin-left:50px; margin-bottom:0; border:0.75pt solid #000000; -aw-border:0.5pt single; border-collapse:collapse">
            <tr style="height:17.1pt">
                <td style="width:25%; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">&#xad;</span><span style="font-family:'Times New Roman'">ANAMNESIS</span></p>
                </td>
                <td style="width:25%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-right:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Datos de
                            Filiación</span></p>
                </td>
                <td style="width:25%; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-right:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Nombre y
                            Apellido:</span>{{ $record->patient->name.' '.$record->patient->last_name}}</p>
                </td>
                <td style="width:25%; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:19.2pt">
                <td rowspan="25" style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">{{$record->anamnesis}}</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Edad:</span>{{$record->patient->age}}</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:17.1pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Cedula
                            de identidad:</span>{{$record->patient->ci}}</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:17.1pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Sexo:</span> @if($record->gender=='M')
                        <span style="margin-bottom:0pt; font-size:8pt">Masculino</span>
                        @else <span style="margin-bottom:0pt; font-size:8pt">Femenino</span>
                        @endif
                    </p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:17.1pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Etnia:</span>{{$record->ethnicity}}</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:19.2pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Estado
                            Civil:</span>{{$record->marital_status}}</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:17.1pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">A que se
                            dedica:</span>{{$record->work}}</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:17.1pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Lugar de
                            Nacimiento:</span>@if($record->seaside != 'seleccione una opición')
                        {{$record->seaside}}
                        @endif</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:17.1pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Residencia Actual:</span>@if($record->residence != 'seleccione una opición')
                        {{$record->residence}}
                        @endif</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:19.2pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Dirección:</span>@if($record->direction != 'seleccione una opición')
                        {{$record->direction}}
                        @endif</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:17.1pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Teléfono:</span>{{$record->patient->phone}}</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:17.1pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Instrucción:</span>@if($record->instruction != 'seleccione una opición')
                        {{$record->instruction}}
                        @endif</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:19.2pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Tipo de
                            Sangre:</span>@if($record->type_of_blood != 'seleccione una opición')
                        {{$record->type_of_blood}}
                        @endif</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:34.3pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Motivo
                            de Consulta/ Porque motivo viene usted?</span>{{$record->reason}}</p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>

                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:34.3pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">Enfermedad Actual.</span>{{$record->disease}}</p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">FAC?:
                            Cuando empezó la molestia?</span>{{$record->fac}}</p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:34.3pt">
                <td rowspan="7" style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">FRC?:
                            Nunca antes presento esta molestia?</span>{{$record->frc}}</p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:34.3pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">CA?:
                            Cuál cree usted que fue la causa de esta molestia?</span>{{$record->ca}}</p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:17.1pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">FC?:
                            Cómo empezó?</span>{{$record->fc}}</p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:34.3pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">SA?: Que
                            otra molestia ha presentado?</span>{{$record->sa}}</p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:51.6pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">E?: En
                            las últimas horas o días ha cambiado en alguna forma la molestia?</span>{{$record->e}}</p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:36.5pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">RM?: A
                            tomado algo para esta molestia?</span>{{$record->rm}}</p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:42.55pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">EA?: En
                            este momento como sigue su molestia?</span>{{$record->ea}}</p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>

            <tr style="height:51.6pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">¿Enfermedades de gravedad por la que tome
                            medicamentos?</span>{{$record->eg}}</p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:34.3pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">¿Enfermedades Graves en sus familiares de
                            sangre?</span>{{$record->egs}}</p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:18.9pt">
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">¿Le han
                            realizado cirugías?</span>{{$record->cir}}</p>
                </td>
                <td style="width:25%; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-bottom:0.5pt single; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>
            <tr style="height:28.45pt">
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-left:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'">¿Tiene
                            alergias algún medicamento o alimento?</span>{{$record->aler}}</p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-left:0.5pt single; -aw-border-right:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
                <td style="width:25%; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top; -aw-border-left:0.5pt single; -aw-border-top:0.5pt single">
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                    <p style="margin-bottom:0pt; font-size:8pt"><span style="font-family:'Times New Roman'; -aw-import:ignore">&#xa0;</span></p>
                </td>
            </tr>

        </table>
    </div>
    <div class="page-break"></div>
    <div class="header">
        <div class="conter">
            <img class="img" src="{{public_path('dists/assets/img/logo-removebg-preview.png')}}" height="10%" width="10%" alt="">
        </div>
        <div class="title">
            Ficha Médica
        </div>
    </div>
    <table cellspacing="0" cellpadding="0" class="TableGrid" style="height:auto;margin-top:10px ;width:100%; margin-right:50px; margin-left:50px; margin-bottom:0; border:0.75pt solid #000000; -aw-border:0.5pt single; border-collapse:collapse">

        <tr>
            <td width="100%" valign="top" style="border: 1px solid #000000; padding: 0in 0.08in">
                <p>
                    <font face="Times New Roman, serif">
                        <font size="3" style="font-size: 12pt">Examen
                            F&iacute;sico</font>
                    </font>
                </p>
            </td>
        </tr>
        <tr>
            <td width="100%" height="315" valign="top" style="border: 1px solid #000000; padding: 0in 0.08in">
                <p>
                    {{$record->examen}}

                </p>
            </td>
        </tr>
        <tr>
            <td width="100%" height="4" valign="top" style="border: 1px solid #000000; padding: 0in 0.08in">
                <p>
                    <font face="Times New Roman, serif">
                        <font size="3" style="font-size: 12pt">Tratamiento
                        </font>
                    </font>
                </p>
            </td>
        </tr>
        <tr>
            <td width="100%" height="315" valign="top" style="border: 1px solid #000000; padding: 0in 0.08in">
                <p>
                    {{$record->tratamiento}}

                </p>
            </td>
        </tr>
    </table>

</body>
</html>
