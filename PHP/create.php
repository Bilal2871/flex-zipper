<?php $title = "Portfolio maken"; ?>
<?php require("../partials/head.php"); ?>

<script src="https://cdn.tiny.cloud/1/kuruob7phyjg9e1sao6twpsxlcfwd4s9p13w69v7sgtunou2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
        tinymce.init({
            selector: '#experienceArea'
        });

        tinymce.init({
            selector: '#internshipArea'
        });
  </script>
<body>
    <?php require("../partials/header.php"); ?>

    <form action="#">
        <h3>&nbsp;<i class="fas fa-suitcase"></i> Werkervaring</h3>

        <div class="formcontainer">
            <label for="function">Functie</label><br>
            <input type="text" name="function" id="function">

            <label for="employer">Werkgever</label><br>
            <input type="text" name="employer" id="employer">

            <label for="place">Plaats</label><br>
            <input type="text" name="place" id="place">

            <label for="startperiod">Periode</label>
            <label for="endperiod" class="halfway">Tot</label><br>
            <input type="text" name="startperiod" id="startperiod" class="halfwidth" placeholder="DD-MM-YYYY">
            <input type="text" name="endperiod" id="endperiod" class="halfwidth" placeholder="DD-MM-YYYY">

            <label for="experienceArea">Omschrijving</label>
            <textarea id="experienceArea" name="experienceArea"></textarea>
        </div>

        <h3>&nbsp;<i class="fas fa-user-graduate"></i> Opleidingen</h3>
        <div class="formcontainer">
            <label for="eductaion">Opleiding</label><br>
            <input type="text" name="eductaion" id="eductaion">

            <label for="institute">Instituut</label><br>
            <input type="text" name="institute" id="institute">

            <label for="eduplace">Plaats</label><br>
            <input type="text" name="eduplace" id="eduplace">

            <label for="diploma">Diploma?</label><br>
            <select name="diploma" id="diploma">
                <option value="" selected disabled>Kies een optie</option>
                <option value="true">Ja</option>
                <option value="false">Nee</option>
            </select><br>

            <label for="startperiod">Periode</label>
            <label for="endperiod" class="halfway">Tot</label><br>
            <input type="text" name="startperiod" id="startperiod" class="halfwidth" placeholder="DD-MM-YYYY">
            <input type="text" name="endperiod" id="endperiod" class="halfwidth bottom" placeholder="DD-MM-YYYY">
        </div>

        <h3>&nbsp;<i class="fas fa-medal"></i> Cursussen</h3>
        <div class="formcontainer">
            <label for="course">Cursus</label><br>
            <input type="text" name="course" id="course">

            <label for="courseperiod">Periode</label><br>
            <input type="text" name="courseperiod" id="courseperiod">

            <label for="coursediploma">Behaald?</label><br>
            <select name="coursediploma" id="diploma">
                <option value="" selected disabled>Kies een optie</option>
                <option value="true">Ja</option>
                <option value="false">Nee</option>
            </select><br>

            
        </div>
    </form>

</body>
</html>