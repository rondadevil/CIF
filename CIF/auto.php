<?php include 'includes/overall/header.php'; ?>
<h1 class="main_title">Autocomplete using PHP/MySQL and jQuery</h1>
<div class="content">
    <div class="container">
        <div class="header">
            <img src="images/BeWebDeveloper.png" />
    <form>
        <div class="label_div">Type a keyword : </div>
        <div class="input_container">
            <input type="text" id="rank" onkeyup="autocomplet()">
            <ul id="name_list"></ul>
        </div>
    </form>
            </div>
        </div>

</div><!-- content -->

<style>

    {
        margin: 0;
        padding: 0;
    }
    body {
        padding: 10px;
        background: #eaeaea;
        text-align: center;
        font-family: arial;
        font-size: 12px;
        color: #333333;
    }
    .container {
        width: 1000px;
        height: auto;
        background: #ffffff;
        border: 1px solid #cccccc;
        border-radius: 10px;
        margin: auto;
        text-align: left;
    }
    .header {
        padding: 10px;
    }
    .main_title {
        background: #cccccc;
        color: #ffffff;
        padding: 10px;
        font-size: 20px;
        line-height: 20px;
    }
    .content {
        padding: 10px;
        min-height: 100px;
    }
    .footer {
        padding: 10px;
        text-align: right;
    }
    .footer a {
        color: #999999;
        text-decoration: none;
    }
    .footer a:hover {
        text-decoration: underline;
    }
    .label_div {
        width: 120px;
        float: left;
        line-height: 28px;
</style>

<?php include 'includes/overall/footer.php'; ?>

