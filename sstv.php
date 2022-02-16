<?php $title="SSTV MODULE"; include "header.php"; ?>

<head>
    <link rel="stylesheet" href="css/technical.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>


<div class="container-fluid" id="i01">
    <div class="container-fluid" id="i02below">
        <div class="row">
            <div class="column">
                <div>
                    <img src="./images/sstv_module.jpg" id="i060"></img>
                </div>
            </div>
            <div class="column">
                <div id="i04below3">
                    Slow Scan Television is a picture transmission method used mainly by ham radio operators. Static
                    pictures are transmitted and received via analog frequency modulation in HF, UHF and VHF bands.
                    Every pixel in an image is represented as a sinusoid of different frequencies and color is achieved
                    by encoding the brightness of each color component separately. Demodulation can generate an audio
                    representation of the image.
                    <b> Aim of the mission</b>
                    <br>
                    <ul>
                        <li>To design and build a satellite-borne transmitter for broadcasting images using the SSTV
                            communication protocol.
                        <li>Equip and train a layperson (especially school students) to build a low-cost receiver (5000
                            INR) to intercept the signal and get images.
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <b id="h000">Specifications of the system</b><br><br>
    <div style="padding-bottom:20px;">
        <table id="t01" style="margin-bottom: 20px;">
            <tr id="t02">
                <td id="t03">SSTV Module</td>
                <td id="t03">PD90 (90 seconds)</td>
            </tr>
            <tr id="t02">
                <td id="t03">Display resolution</td>
                <td id="t03">320x256</td>
            </tr>
            <tr id="t02">
                <td id="t03">Operating Frequency Band</td>
                <td id="t03">VHF (144-146 Mhz)</td>
            </tr>
            <tr id="t02">
                <td id="t03">Power consumption</td>
                <td id="t03">
                    <5.5W< /td>
            </tr>
            <tr id="t02">
                <td id="t03">Cost (approx.) of Module</td>
                <td id="t03">INR 10,000</td>
            </tr>
            <tr id="t02">
                <td id="t03">Cost (approx.) of Receiver</td>
                <td id="t03">INR 5,000 </td>
            </tr>
        </table>
    </div>
</div>
<?php include "footer.php"; ?>