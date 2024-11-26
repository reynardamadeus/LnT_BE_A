
<!DOCTYPE html>
<html lang="en">

<!--mengatur spesifikasi page website-->
<head>
    <!--Menampung banyak karaketer unik-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--
    <style>
        .box{
            width: 100px;
            height: 100px;
            background-color: red;
        }
    </style>
    -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<!--ngoding tampilan dan struktur utama dari website kita-->
<body>
    <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">This is Heading 1</h1>
    <h2>This is Heading 2</h2>
    <h3>This is Heading 3</h3>
    <h4>This is Heading 4</h4>
    <h5>This is Heading 5</h5>
    <h6>This is Heading 6</h6>

    <div class="box">
        <p>Hello World!</p>
        <a href="https://www.youtube.com/">This goes to Youtube</a>
    </div>

    <div class="box">
        <p >Hello World!</p>
        <a href="https://www.youtube.com/">This goes to Youtube</a>
    </div>

    <div class="box">
        <p >Hello World!</p>
        <a href="https://www.youtube.com/">This goes to Youtube</a>
    </div>

    <br> <hr> <br>
    <img src="{{asset('haryPrasetyo.jpg')}}" alt="">
    <br> <hr> <br>

    <form action="">
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="Please input your name">
        <br>
        <label for="">Tanggal Lahir</label>
        <input type="date" name="dob"  placeholder="Please input your dob">
        <br>
        <label for="">Umur</label>
        <input type="number" name="umur"  placeholder="Please input your age">
        <br>
        <button type="submit"> This is Submit button</button>
    </form>

    <form action=""></form>
    <button type="button"> This is button</button>

    <table>
        <tr>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Umur</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>14-8-2025</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>14-8-2025</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>14-8-2025</td>
            <td>20</td>
        </tr>
    </table>

    <button class="test">Pseudo class</button>
    <video >
        <source src="{{asset('videoTrainingMoGraphTS_Reynard.mp4')}}">
    </video>


    <!--Semantic Tags-->
    <header></header>
    <nav></nav>
    <main></main>
    <footer></footer>

    <!--Card-->
    <div class="layout">
        <div class="card">
            <img src="{{asset('haryPrasetyo.jpg')}}" alt="" class="card-img">

            <h3 class="card-title">Hary Prasetyo</h3>
            <p class="card-paragraph">Koruptor Indonesia</p>
        </div>
        <div class="card">
            <img src="{{asset('haryPrasetyo.jpg')}}" alt="" class="card-img">

            <h3 class="card-title">Hary Prasetyo</h3>
            <p class="card-paragraph">Koruptor Indonesia</p>
        </div>

        <div class="card">
            <img src="{{asset('haryPrasetyo.jpg')}}" alt="" class="card-img">

            <h3 class="card-title">Hary Prasetyo</h3>
            <p class="card-paragraph">Koruptor Indonesia</p>
        </div>
    </div>
</body>
</html>
