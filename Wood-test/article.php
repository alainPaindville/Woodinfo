    <link rel="stylesheet" href="test.css">
    <!-- css Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- JS bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    


    <?php
        include 'include/navbar.php';
    ?>
<div class="container">
    <div class="row">
    <div class="col-lg-6">
    <aside>
        <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapse1">
                    1
                </a>
            </div>
            <div id="collapse1" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapse2">
                2
                </a>
            </div>
            <div id="collapse2" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapse3">
                3
                </a>
            </div>
            <div id="collapse3" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapse4">
                4
                </a>
            </div>
            <div id="collapse4" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum..
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapse5">
                5
                </a>
            </div>
            <div id="collapse5" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum..
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapse6">
                6
                </a>
            </div>
            <div id="collapse6" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum..
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapse7">
                7
                </a>
            </div>
            <div id="collapse7" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum..
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapse8">
                8
                </a>
            </div>
            <div id="collapse8" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum..
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapse9">
                9
                </a>
            </div>
            <div id="collapse9" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum..
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapse10">
                10
                </a>
            </div>
            <div id="collapse10" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum..
                </div>
            </div>
        </div>
    </aside>
</div>
<div class="col-lg-6">
    <h1>test</h1>
</div>
    </div>
</div>


    




<script>
$(document).ready(function(){
    $(".collapse").click(function(){
        $(".collapse").collapse('toggle');
    });
    // $(".btn-success").click(function(){
    //     $(".collapse").collapse('show');
    // });
    // $(".btn-warning").click(function(){
    //     $(".collapse").collapse('hide');
    // });
});
</script>