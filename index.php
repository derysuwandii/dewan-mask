 <html>  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
    <title>Dewan mask Tutorial</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>  
<body>
  <nav class="navbar navbar-dark bg-danger">
    <a class="navbar-brand text-white" href="index.php">
      Dewan Komputer
    </a>
  </nav>

  <h2 align="center" style="margin: 30px;">Dewan Demo Masking</h2>

  <div class="container">
    <div class="row">
      <div class="col-sm-6 mb-4">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Masking Date and Time
          </div>
          <div class="card-body">
            <label>Date</label>
            <input type="text" name="date" class="form-control date" placeholder="00/00/0000">

            <label>Time</label>
            <input type="text" name="time" class="form-control time" placeholder="00:00:00">

            <label>Date Time</label>
            <input type="text" name="date_time" class="form-control date_time" placeholder="00/00/0000 00:00:00">
          </div>
        </div>
      </div>

      <div class="col-sm-6 mb-4">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Masking Phone
          </div>
          <div class="card-body">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control phone" placeholder="0000-0000">

            <label>Phone Us</label>
            <input type="text" name="phone_us" class="form-control phone_us" placeholder="(000) 000-0000">

            <label>Phone With DDD</label>
            <input type="text" name="phone_with_ddd" class="form-control phone_with_ddd" placeholder="(00) 0000-0000">
          </div>
        </div>
      </div>

      <div class="col-sm-6 mb-4">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Masking Billing
          </div>
          <div class="card-body">
            <label>Credit Card</label>
            <input type="text" name="credit_card" class="form-control credit_card" placeholder="0000 0000 0000 0000">

            <label>Valid</label>
            <input type="text" name="valid" class="form-control valid" placeholder="00/00">

            <label>Uang</label>
            <input type="text" name="money" class="form-control money" placeholder="000.000.000.000.000,00">

            <label>Uang Tak Terbatas</label>
            <input type="text" name="money2" class="form-control money2" placeholder="#.##0,00">
          </div>
        </div>
      </div>

      <div class="col-sm-6 mb-4">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Other
          </div>
          <div class="card-body">
            <label>Persen</label>
            <input type="text" name="percent" class="form-control percent" placeholder="##0,00%">

            <label>IP Address</label>
            <input type="text" name="ip_address" class="form-control ip_address2" placeholder="099.099.099.099">

            <label>Mixed Angka dan Huruf</label>
            <input type="text" name="mixed" class="form-control mixed" placeholder="AAA 000-S0S">

            <label>Placeholder</label>
            <input type="text" name="placeholder" class="form-control placeholder" placeholder="00/00/0000">

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center">© <?php echo date('Y'); ?> Copyright:
      <a href="https://dewankomputer.com/"> Dewan Komputer</a>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.mask.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.date').mask('00/00/0000');
      $('.time').mask('00:00:00');
      $('.date_time').mask('00/00/0000 00:00:00');
      $('.phone').mask('0000-0000');
      $('.phone_with_ddd').mask('(00) 0000-0000');
      $('.phone_us').mask('(000) 000-0000');
      $('.mixed').mask('AAA 000-S0S');
      $('.money').mask('000.000.000.000.000,00', {reverse: true});
      $('.money2').mask("#.##0,00", {reverse: true});
      $('.ip_address').mask('099.099.099.099');
      $('.percent').mask('##0,00%', {reverse: true});
      $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
      $('.credit_card').mask('0000 0000 0000 0000');
      $('.valid').mask('00/00');
    });
  </script>
</body>  
</html>  