<!DOCTYPE html>

<head>
    <title>PHP - Recording Audio using Recorder.js</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Dropzone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Dropzone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Audio Recording</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Basic Recorder.js</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="process.php">File Upload</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <h6 class="mt-4 mb-4 fst-italic">This example shows recording of audio. (Permission to access microphone will appear and needs to be accepted.)</h6>
        </div>
    </header>

    <section>

    </section>

    <section>
        <div class="container mt-2">
            <button id="modal" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Modal</button>

            <!-- <div class="d-flex mb-2">
                <button id="recordButton" class="btn btn-primary me-2" onclick="start();">Record</button>
                <button id="stopButton" class="btn btn-danger me-2" onclick="stop();" disabled>Stop</button>
            </div> -->

        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Record a Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex mb-2">
                        <button id="recordButton" class="btn btn-primary me-2" onclick="start();">Record</button>
                        <button id="stopButton" class="btn btn-danger me-2" onclick="stop();" disabled>Stop</button>
                    </div>
                    <div id="formats">Format: start recording to see sample rate</div>
                    <p><strong>Recordings:</strong></p>
                    <ol id="recordingsList"></ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="recorder.js"></script>
<script src="app_basic.js"></script>

<script>
    function start() {
        $("#recordButton").attr("disabled", true);
        $("#stopButton").attr("disabled", false);
        startRecording();
    }

    function stop() {
        $("#recordButton").attr("disabled", false);
        $("#stopButton").attr("disabled", true);
        stopRecording();
    }
</script>

</html>