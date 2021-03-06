<!doctype html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="styles/master.css" />

  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

  <!-- Custom Fonts -->


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@300&display=swap"
    rel="stylesheet">


  <title>Kis Gyöngyvér - étkezési tanácsadó</title>

</head>

<script type="text/javascript">

  $(document).ready(function () {
    // Transition effect for navbar 
    $(window).scroll(function () {
      // checks if window is scrolled more than 500px, adds/removes solid class
      if ($(this).scrollTop() > 5) {
        $('.navbar').addClass('solid');
      } else {
        $('.navbar').removeClass('solid');
      }
    });
  });

</script>

<body>

  <!-- Navbar -->

  <header>

    <nav class="navbar index fixed-top navbar-expand-lg navbar-dark bg-dark">

      <div class="container-fluid " data-scroll-section>

        <a class="navbar-brand" href="#">
          <h2>Kis Gyöngyvér</h2>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

          <div class="navbar ml-auto font-weight-bold">
            <ul class="navbar-nav">
              <li class="nav-item">

                <a class="nav-link" href="#tanacsadas">Tanácsadás</a>
              </li>

              <li class="nav-item">

                <a class="nav-link" href="#magamrol">Magamról</a>
              </li>
              <li class="nav-item">

                <a class="nav-link" href="#blog">Blog</a>
              </li>
              <li class="nav-item">

                <a class="nav-link" href="#kapcsolat">Kapcsolat</a>
              </li>

              <a target="_blanc" href="https://www.instagram.com/csucshatas8/"><span
                  class="icon fab fa-instagram"></span></a>

              <a target="_blanc"
                href="https://www.facebook.com/Kis-Gy%C3%B6ngyv%C3%A9r-T%C3%A1pl%C3%A1lkoz%C3%A1si-tan%C3%A1csad%C3%B3-109595007585933"><span
                  class="icon fab fa-facebook"></span></a>
            </ul>

          </div>

        </div>
      </div>
    </nav>
  </header>

  <main>

    <!-- Navbar end-->

    <!-- Landing -->

    <div class="container-fluid landing"
      style="background-image: url('img/landing.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; min-height: 100vh;">

      <a href="#"><img src="img/hiclipart.com%20(1).png"
          style="max-width: 45px; opacity: .7; background-color: #b5b5b56b; border-radius: 50%; padding: 5px; position: fixed; bottom: 20px; right: 10px; z-index: 1;"></a>

      <div class="container">
        <div class="landing_text">
          <div class="landing_text_anim">
            <h2 class="display-1 text-white ">Vár rád egy <br> egészségesebb <br> élet</h2>
          </div>
          <div class="landing_text_anim">
            <button class="btn btn-light btn-lg keressbutton" data-toggle="modal" data-target="#keressModal"
              id="keressbutton">

              Engem keresel, ha...
            </button>
          </div>
        </div>
      </div>

    </div>


    <!-- Landing end-->

    <!-- Tanácsadás oldal-->

    <section id="tanacsadas" style="min-height: 100vh; overflow: hidden; position: relative;" class="tanacsadas">

      <div class="circle yellow"></div>

      <div class="container">
        <div class="tanacsadas_content" style="padding-top: 20vh;">

          <div class="row">

            <div class="col-lg-8" style="z-index: 4;">

              <h2 class="display-2">Tanácsadás</h2>

              <p>Személyre szabott táplálkozási tanácsadás.</p>

              <p>A tanácsadások során fontos számomra, hogy segítsek Neked egy új életmód kialakításában, amely hosszú
                távon tartható. Tehát nem egy diétáról van szó, amelyet határozott ideig be kell tartanod, hanem egy
                komplex tudásanyagot állítok össze, amelynek segítségével egészséges, számodra optimális táplálkozási
                szokásokat tudsz kialakítani.</p>

              <p>Ezért az ehhez szükséges alapelveket adom át Neked a tanácsadás során, megtanítanítalak arra, hogy mire
                van szüksége a szervezetednek a megfelelő működéshez.</p>

              <div>
                <button class="mybutton btn-lg btn-dark" data-toggle="modal" data-target="#tanacsadasModal"
                  style="margin-top: 5vh; width: 320px;">

                  A tanácsadás menete
                </button>
              </div>

              <div>
                <button class="mybutton btn-lg btn-dark" data-toggle="modal" data-target="#arakModal"
                  style="margin-top: 10px; width: 320px;">

                  Árak
                </button>
              </div>

            </div>

            <div class="col-lg-2">

              <svg xmlns="http://www.w3.org/2000/svg" style="z-index:-1; margin-top: -130px; margin-left: -250px;"
                width="1000" height="793" viewBox="0 0 1400 793">
                <g id="Salad" transform="translate(49.109 37.469)">
                  <rect id="frame" width="1400" height="793" transform="translate(-49.109 -37.469)" fill="none" />
                  <path id="Path_1" data-name="Path 1"
                    d="M795.352,475.4a91.227,91.227,0,0,0-9.812.521c6.1-5.621,9.439-11.689,9.439-18.017,0-28.736-68.807-52.173-153.172-52.173s-153.171,23.438-153.171,52.173a20.73,20.73,0,0,0,3.889,11.691q-3.556-.15-7.242-.156c-4.968,0-9.778.214-14.349.609-9.771-3.129-23.452-5.081-38.573-5.081-29.557,0-53.667,7.455-53.667,16.593s24.109,16.595,53.667,16.595c4.97,0,9.778-.216,14.35-.609,9.771,3.129,23.454,5.081,38.571,5.081,19.964,0,37.428-3.4,46.673-8.427,27.869,9.784,66.835,15.882,109.852,15.882a413.863,413.863,0,0,0,64.8-4.918c9.734,3.031,23.207,4.915,38.061,4.915a145.142,145.142,0,0,0,32.4-3.384,85.753,85.753,0,0,0,18.28,1.894c21.759,0,39.508-7.455,39.508-16.593S817.111,475.4,795.352,475.4Z"
                    transform="translate(1.309 174.701)" fill="#d6eafa" fill-rule="evenodd" opacity="0.5"
                    style="mix-blend-mode: multiply;isolation: isolate" />
                  <path id="Path_129" data-name="Path 129"
                    d="M462.51,295.374c-.019,9.228-9.13,2.378-11.8,2.225-4.873-.277-6.415,5.314.161,10.2,3.547,2.636,7.849,5.065,5.053,9.672a1.034,1.034,0,0,0,.811-.55c4.354-6.567-7.881-10.689-8.28-14.915-.395-4.142,4.509-2.08,6.332-1.254C460.054,303.132,464.673,299.178,462.51,295.374Z"
                    transform="translate(32.956 123.178)" fill="#cad465" fill-rule="evenodd" />
                  <g id="back_salad2" transform="translate(478.266 357.314)">
                    <path id="Path_130" data-name="Path 130"
                      d="M616.15,313.582c4.512-9.109-4.085-5.216-3.246-12.963s7.56-11.205-1.914-20.172-15.054-8.558-13.875-.717-8.3,3.8-8.333-4.01,5-20.338-13.136-21.846-9.771,3.9-4.186,15.647-6.02,15.905-5.721,8.88c.731-17.026-14.743-17.167-17.084-13-2.189,3.887,1.69,9.307,1.226,9.454-6.283,1.986-7.28-10.167-14.815-.034s11.182,12.1-1.369,13.645-15.453-1.581-11.927-11.742-12.784-15.69-22.625-3.2,11.23,18.315,3.716,24.409-11.221-.609-13.821-8.138-7.028-14.463-14.974-9.853-10.61,10.529-4.349,19.656-3,8.608-7,2.573-13.367,1.5-11.147,7.337,13.422,5.5,9.887,8.572-11.827-7.741-14.4.753,9.527,9.212,8.338,14.472-10.726,3.105-6.406,10.319,34.081,13.274,41.5,11.131,11.615-4.547,18.925-7.959a208.954,208.954,0,0,1,23.22-9.672c7.813-2.526,27.551-14.089,47.02-20.026A97.073,97.073,0,0,1,616.15,313.582Z"
                      transform="translate(-445.211 -253.627)" fill="#84a636" fill-rule="evenodd" />
                    <path id="Path_131" data-name="Path 131"
                      d="M617.055,308.625c4.4-9.479-3.977-8.486-3.41-13.536s.76-3.9,1.391-5.567c-5.232-3.292-3.4-4.538-15.588.3S586.924,282,580.807,277.7s-1.542,5.1-14.163,11.07-16.834-9.885-33.324-.838-16.075,1.352-13.623-8.952c-.559-2.023-1.235-1.539,1.154-8.693s-13.09-16.108-23.112-3.051c-5.278,6.872-.129,13.623,4.527,20.636,4.69,7.066,8.964,14.35,3.249,20.938-8.214,9.466-18.188,14.507-28.255,12.677s-16.1,3.315-9.634,12.257-5.975,6.033-21.4,1.471c-.651.97-1.037,1.611.739,4.634s10.212,7.337,18.925,9.646,18.179,3.406,23.2,1.917,11.773-4.716,19.2-8.26c7.5-3.579,15.66-7.452,23.6-10.091s28.036-14.7,47.922-20.866A96.361,96.361,0,0,1,617.055,308.625Z"
                      transform="translate(-445.683 -250.383)" fill="#6e8f31" fill-rule="evenodd" />
                    <path id="Path_132" data-name="Path 132"
                      d="M612.623,309.025c4.437-9.586-3.88-9.426-3.372-13.6s.051-.562.089-.836c-10.79.132-14.506,6.033-23.926,5.576s-2-15.663-18.565-7.349-13.758.728-25.243-.562c-10.6-1.188-20.6,3.387-24.212-.037-5.354-1.347-1.794-15.66-.361-19.995,2.048-6.195-7.939-15.6-17.3-10.36-.018,3.051-3.934,6.613.037,16.267s7.544,13,10.139,19.751c2.62,6.8,5.936,10.159-3.1,20.587s-33.585,9.414-35.31,19.116-8.335,9.554-16.471,10.966c10.069,3.7,24.04,5.727,29.716,4.046s11.776-4.742,19.2-8.308c7.481-3.592,15.651-7.529,23.581-10.2s27.974-14.864,47.831-21.187A96.678,96.678,0,0,1,612.623,309.025Z"
                      transform="translate(-441.323 -250.496)" fill="#607f2d" fill-rule="evenodd" />
                    <path id="Path_133" data-name="Path 133"
                      d="M561.543,274.073c-4.732-4.572-10.073-7.77-9.114-1.668,1.052,6.667-.16,8.255-7.173,3.937-.221-.12-.442-.238-.651-.334,2.384,2.962,7.154,5.044,9.068,3.148C557.676,275.2,547.15,265.84,561.543,274.073Z"
                      transform="translate(-399.5 -246.431)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_134" data-name="Path 134"
                      d="M462.158,277.109c5.666-3.925,10.919-4.791,14.614.659,1.951,2.871,3.014,11.354,6.57,15,2.271,2.329,4.527,3.051,7.506,4.26-11.818-8.641-5.647-6.016-11.692-19.2C476.18,271.342,467.192,270.419,462.158,277.109Z"
                      transform="translate(-437.992 -244.812)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_135" data-name="Path 135"
                      d="M533.219,264.955c-3.12-6.693-14.823-3.55-10.572,5.759,2.369,5.188-5.188,1.521-6.6.55-3.258-2.238-4.208-3.965-7.669,2.165a5.694,5.694,0,0,0-1.118,3.424c1.011-1.725,3.463-5.507,5.3-6.117.9-.3,5.564,5.38,10.3,4.716,6.557-.917-2.662-8.323,2.219-11.946C527.8,261.492,530.6,262.466,533.219,264.955Z"
                      transform="translate(-416.938 -250.007)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_136" data-name="Path 136"
                      d="M534.554,281c4.182-5.994,4.235-9.108-.249-17.23-3.4-6.167-6.808-8.04,2.856-8.693,4.192-.283,4.016.418,7.67,1.521-5.1-3.934-18.262-3.518-15.557,1.951C534.837,269.806,538.588,269.236,534.554,281Z"
                      transform="translate(-406.827 -253.455)" fill="#cad465" fill-rule="evenodd" />
                  </g>
                  <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="196.774" cy="72.896" rx="196.774" ry="72.896"
                    transform="translate(446.343 409.048)" fill="#8a8e94" />
                  <g id="back_salad" transform="translate(685.413 384.067)">
                    <path id="Path_137" data-name="Path 137"
                      d="M708.1,359.665c7.117-3.685-.163-5.219,3.985-9.755s10.033-3.6,8.194-13.712-5.578-12.465-8.486-6.929-7.048-1.457-3.427-6.438,12.669-10.6,1.842-20.015-8.034-2.08-9.961,7.991-11.245,7.3-7.779,2.979c8.406-10.484-1.364-17.792-4.8-16.237-3.207,1.454-3.27,6.708-3.633,6.585-4.918-1.671.114-9.862-9.4-6.934s1.464,12.907-7.237,8.034-9.087-8.214-2.1-13.027-.808-15.935-12.892-12.589-1.4,16.884-9.026,17.25-6.847-5.624-4.987-11.62,2.281-12.471-4.923-13.25-11.657,1.741-11.934,10.465-5.925,4.069-5.65-1.63-9.2-5.287-10.512-.535,5.967,9.758,2.287,10.058-3.908-10.437-9.5-6.237,1.759,10.3-1.452,13.09-8.269-3.031-8.888,3.57,15.474,24.338,21.187,26.434,9.505,2.53,15.745,3.771a164.527,164.527,0,0,1,19.273,4.684c6.145,2.039,24.086,3.9,39.233,9.207A76.545,76.545,0,0,1,708.1,359.665Z"
                      transform="translate(-586.478 -271.865)" fill="#84a636" fill-rule="evenodd" />
                    <path id="Path_138" data-name="Path 138"
                      d="M709.6,357.411c7.223-3.971,1.429-7.252,4.148-10.2s2.3-2.127,3.481-2.891c-1.791-4.533-.043-4.47-10.051-7.082s-4.311-10.809-6.19-16.4-3.358,2.522-14.167.43-6.089-14.139-20.794-16.078-10.85-6.641-4.481-12.047c.587-1.548-.069-1.555,4.788-4.984s-.805-16.348-13.268-12.724c-6.561,1.905-6.438,8.6-6.75,15.23-.312,6.679-1,13.3-7.7,14.823-9.637,2.187-18.33.739-23.876-5.122s-11.777-5.4-11.841,3.295-6.613,1.052-14.292-9.045c-.864.312-1.411.538-1.69,3.289s3.069,9.432,7.529,14.964,9.967,10.643,13.854,12.043,9.684,2.5,16.058,3.7a167.319,167.319,0,0,1,19.709,4.6c6.28,2.027,24.681,3.733,40.195,9.1A75.912,75.912,0,0,1,709.6,357.411Z"
                      transform="translate(-586.901 -270.494)" fill="#6e8f31" fill-rule="evenodd" />
                    <path id="Path_139" data-name="Path 139"
                      d="M708.18,357.524c7.293-4.022,1.933-7.8,4.2-10.217s.3-.331.447-.491c-6.919-4.949-12.033-2.932-17.809-7.616s6.036-10.89-8.374-13.334-9.084-5.955-15.783-12.132c-6.184-5.7-14.676-7.458-15.373-11.32-2.777-3.355,6.165-10.792,9.1-12.878,4.191-2.982,2.233-13.624-6.165-14.661-1.436,1.935-5.587,2.37-7.566,10.36s-1.272,11.783-2.771,17.284c-1.509,5.546-.965,9.231-11.578,11.641s-25.74-9.684-31.361-4.32-9.756,2.183-15.588-.717c4.675,7.048,12.611,14.858,17,16.436s9.7,2.479,16.078,3.676a169.219,169.219,0,0,1,19.748,4.518c6.285,2,24.717,3.6,40.29,8.847A76.215,76.215,0,0,1,708.18,357.524Z"
                      transform="translate(-585.661 -270.459)" fill="#607f2d" fill-rule="evenodd" />
                    <path id="Path_140" data-name="Path 140"
                      d="M679.952,317.131c-.876-5.113-2.778-9.637-5.014-5.311-2.444,4.731-3.953,5.172-6.4-.845-.087-.177-.172-.355-.258-.516.132,3,2.191,6.547,4.295,6.234C676.97,316.04,674.643,305.185,679.952,317.131Z"
                      transform="translate(-548.907 -254.021)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_141" data-name="Path 141"
                      d="M615.008,273.193c5.435.147,9.174,2.049,8.984,7.237-.1,2.733-3.384,8.624-2.822,12.6.358,2.541,1.452,4.053,2.781,6.211-3.481-11.007-.779-6.46,1.526-17.66C626.614,276.066,621.33,271.287,615.008,273.193Z"
                      transform="translate(-573.779 -271.444)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_142" data-name="Path 142"
                      d="M667.464,297.158c1.138-5.709-7.767-9.172-9.408-1.272-.914,4.4-4.007-1.455-4.452-2.73-1.028-2.943-.824-4.484-5.888-2.2a4.491,4.491,0,0,0-2.306,1.653c1.445-.625,4.77-1.885,6.225-1.413.714.229,1.027,6.014,4.346,7.8,4.6,2.476,2.192-6.535,6.985-6.557C665.631,292.425,666.964,294.356,667.464,297.158Z"
                      transform="translate(-559.585 -263.465)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_143" data-name="Path 143"
                      d="M661.4,309.816c5.458-1.856,6.943-3.814,7.883-11.067.71-5.51-.577-8.285,5.869-4.194,2.8,1.776,2.359,2.14,4.166,4.546-1.4-4.879-9.967-10.758-10.8-6.019C666.8,302.831,669.451,304.221,661.4,309.816Z"
                      transform="translate(-552.122 -262.775)" fill="#cad465" fill-rule="evenodd" />
                  </g>
                  <path id="Path_144" data-name="Path 144"
                    d="M618.641,426.158c104.829,0,190.325-29.84,190.325-66.427s-85.5-66.424-190.325-66.424-190.325,29.839-190.325,66.424S513.816,426.158,618.641,426.158Z"
                    transform="translate(24.475 122.213)" fill="#425820" fill-rule="evenodd" />
                  <g id="kiwi4" transform="translate(642.968 389.384)">
                    <path id="Path_145" data-name="Path 145"
                      d="M590.991,271.883a45.98,45.98,0,1,1-45.979,45.98A45.982,45.982,0,0,1,590.991,271.883Z"
                      transform="translate(-545.012 -268.173)" fill="#748327" fill-rule="evenodd" />
                    <path id="Path_146" data-name="Path 146"
                      d="M590.991,269.354a45.981,45.981,0,1,1-45.979,45.98A45.983,45.983,0,0,1,590.991,269.354Z"
                      transform="translate(-545.012 -269.354)" fill="#b1bd2b" fill-rule="evenodd" />
                    <path id="Path_147" data-name="Path 147"
                      d="M589.8,272.043l.985,26.656,4.318-26.323-2.364,26.57,7.584-25.575-5.675,26.065,10.726-24.421-8.9,25.146,13.7-22.885L598.2,301.108l16.465-20.986-14.872,22.143,18.966-18.757-17.531,20.1,21.166-16.23-19.911,17.748,23.034-13.451-21.977,15.113,24.536-10.457-23.7,12.239,25.656-7.3-25.046,9.174,26.366-4.028-26,5.962,26.667-.69-26.541,2.656,26.541,2.659-26.667-.693,26,5.962-26.366-4.028,25.046,9.174-25.656-7.3,23.7,12.242L603.538,321.9l21.977,15.116-23.034-13.454,19.911,17.751-21.166-16.233,17.531,20.106-18.966-18.757,14.872,22.143L598.2,327.589l11.978,23.833-13.7-22.885,8.9,25.146-10.726-24.421,5.675,26.063-7.584-25.573,2.364,26.57L590.781,330l-.985,26.656L588.812,330l-4.32,26.323,2.366-26.57-7.583,25.573,5.675-26.063-10.729,24.421,8.9-25.146-13.706,22.885,11.979-23.833L564.93,348.575,579.8,326.432l-18.963,18.757,17.528-20.106L557.2,341.315l19.911-17.748-23.034,13.451,21.98-15.116-24.538,10.46,23.7-12.242-25.656,7.3,25.048-9.174-26.369,4.028,26-5.962-26.664.693,26.541-2.659-26.541-2.656,26.664.69-26-5.962,26.369,4.028-25.048-9.174,25.656,7.3-23.7-12.239,24.538,10.46-21.98-15.116,23.034,13.451L557.2,287.382l21.166,16.233-17.528-20.106L579.8,302.266,564.93,280.123l16.462,20.986-11.979-23.834L583.12,300.16l-8.9-25.146,10.729,24.421-5.675-26.065,7.581,25.575-2.364-26.57L588.81,298.7Z"
                      transform="translate(-543.816 -268.098)" fill="#c1c753" fill-rule="evenodd" />
                    <path id="Path_148" data-name="Path 148"
                      d="M585.641,280.815a29.17,29.17,0,1,1-29.17,29.169A29.169,29.169,0,0,1,585.641,280.815Z"
                      transform="translate(-539.662 -264.003)" fill="#748327" fill-rule="evenodd" />
                    <path id="Path_149" data-name="Path 149"
                      d="M582.651,287.219a19.775,19.775,0,1,1-19.776,19.775A19.774,19.774,0,0,1,582.651,287.219Z"
                      transform="translate(-536.673 -261.014)" fill="#d9d69a" fill-rule="evenodd" />
                    <g id="Group_19" data-name="Group 19" transform="translate(15.697 15.7)">
                      <path id="Path_150" data-name="Path 150"
                        d="M576.936,280.057c.786,0,1.421,1.521,1.421,3.4s-.635,3.4-1.421,3.4-1.42-1.521-1.42-3.4S576.151,280.057,576.936,280.057Z"
                        transform="translate(-546.468 -280.057)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_151" data-name="Path 151"
                        d="M566.272,282.785c.678-.392,1.99.607,2.931,2.236s1.149,3.259.469,3.652-1.993-.607-2.931-2.233S565.593,283.178,566.272,282.785Z"
                        transform="translate(-550.97 -278.823)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_152" data-name="Path 152"
                        d="M558.57,290.4c.393-.682,2.029-.472,3.652.466s2.624,2.25,2.233,2.932-2.029.469-3.654-.471S558.177,291.077,558.57,290.4Z"
                        transform="translate(-554.419 -275.417)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_153" data-name="Path 153"
                        d="M555.713,301.027c0-.785,1.521-1.421,3.4-1.421s3.4.637,3.4,1.421-1.521,1.421-3.4,1.421S555.713,301.812,555.713,301.027Z"
                        transform="translate(-555.713 -270.93)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_154" data-name="Path 154"
                        d="M558.443,312.124c-.393-.682.607-1.995,2.231-2.931s3.264-1.15,3.657-.471-.607,1.995-2.235,2.931S558.836,312.8,558.443,312.124Z"
                        transform="translate(-554.478 -266.86)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_155" data-name="Path 155"
                        d="M566.053,320.417c-.679-.392-.471-2.029.469-3.652s2.249-2.627,2.931-2.235.469,2.029-.469,3.657S566.735,320.81,566.053,320.417Z"
                        transform="translate(-551.072 -264.003)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_156" data-name="Path 156"
                        d="M576.685,323.509c-.785,0-1.423-1.524-1.423-3.4s.638-3.4,1.423-3.4,1.421,1.521,1.421,3.4S577.471,323.509,576.685,323.509Z"
                        transform="translate(-546.586 -262.944)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_157" data-name="Path 157"
                        d="M587.778,320.544c-.679.393-1.991-.607-2.928-2.234s-1.148-3.261-.469-3.654,1.991.609,2.931,2.233S588.46,320.151,587.778,320.544Z"
                        transform="translate(-542.515 -263.944)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_158" data-name="Path 158"
                        d="M596.075,312.339c-.393.682-2.029.474-3.655-.466s-2.624-2.252-2.233-2.931,2.029-.469,3.655.469S596.467,311.661,596.075,312.339Z"
                        transform="translate(-539.658 -266.758)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_159" data-name="Path 159"
                        d="M599.166,301.279c0,.785-1.521,1.42-3.4,1.42s-3.4-.635-3.4-1.42,1.524-1.421,3.4-1.421S599.166,300.495,599.166,301.279Z"
                        transform="translate(-538.601 -270.813)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_160" data-name="Path 160"
                        d="M596.2,290.617c.392.679-.6,1.991-2.233,2.928s-3.259,1.149-3.652.469.6-1.993,2.233-2.931S595.806,289.934,596.2,290.617Z"
                        transform="translate(-539.599 -275.314)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_161" data-name="Path 161"
                        d="M588,282.912c.679.393.469,2.029-.466,3.652s-2.252,2.629-2.931,2.235-.471-2.029.466-3.655S587.318,282.52,588,282.912Z"
                        transform="translate(-542.413 -278.764)" fill="#4a1c00" fill-rule="evenodd" />
                    </g>
                    <g id="Group_20" data-name="Group 20" transform="translate(19.281 19.281)">
                      <path id="Path_162" data-name="Path 162"
                        d="M571.594,282.576c.688-.192,1.621.986,2.083,2.63s.28,3.136-.411,3.328-1.618-.981-2.081-2.627S570.906,282.771,571.594,282.576Z"
                        transform="translate(-552.192 -282.472)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_163" data-name="Path 163"
                        d="M563.041,287.548c.5-.513,1.894.04,3.117,1.235s1.812,2.574,1.313,3.088-1.9-.043-3.12-1.235S562.541,288.057,563.041,287.548Z"
                        transform="translate(-555.959 -280.231)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_164" data-name="Path 164"
                        d="M558.174,296.168c.177-.694,1.662-.911,3.321-.49s2.856,1.326,2.678,2.02-1.665.911-3.321.49S558,296.862,558.174,296.168Z"
                        transform="translate(-558.156 -276.445)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_165" data-name="Path 165"
                        d="M558.234,306.42c-.2-.688.984-1.621,2.63-2.083s3.136-.28,3.328.408-.983,1.621-2.63,2.086S558.427,307.108,558.234,306.42Z"
                        transform="translate(-558.13 -272.422)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_166" data-name="Path 166"
                        d="M563.2,315.541c-.51-.5.042-1.9,1.237-3.12s2.576-1.809,3.089-1.31-.044,1.9-1.238,3.117S563.715,316.043,563.2,315.541Z"
                        transform="translate(-555.888 -269.223)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_167" data-name="Path 167"
                        d="M571.827,320.806c-.694-.177-.914-1.665-.49-3.321s1.326-2.856,2.02-2.679.911,1.662.49,3.318S572.516,320.981,571.827,320.806Z"
                        transform="translate(-552.103 -267.423)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_168" data-name="Path 168"
                        d="M582.079,320.736c-.691.192-1.621-.984-2.086-2.629s-.277-3.138.409-3.333,1.622.986,2.083,2.63S582.767,320.542,582.079,320.736Z"
                        transform="translate(-548.08 -267.44)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_169" data-name="Path 169"
                        d="M591.2,315.352c-.5.512-1.9-.041-3.12-1.235s-1.81-2.576-1.308-3.089,1.894.044,3.117,1.235S591.7,314.841,591.2,315.352Z"
                        transform="translate(-544.881 -269.268)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_170" data-name="Path 170"
                        d="M596.461,306.168c-.175.694-1.662.912-3.318.491s-2.856-1.328-2.678-2.02,1.662-.911,3.318-.49S596.639,305.475,596.461,306.168Z"
                        transform="translate(-543.081 -272.491)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_171" data-name="Path 171"
                        d="M596.391,295.936c.2.688-.983,1.622-2.627,2.083s-3.136.282-3.331-.406.986-1.622,2.63-2.086S596.2,295.248,596.391,295.936Z"
                        transform="translate(-543.097 -276.535)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_172" data-name="Path 172"
                        d="M591.009,287.384c.513.5-.043,1.9-1.235,3.12s-2.577,1.807-3.088,1.308.04-1.9,1.235-3.12S590.5,286.882,591.009,287.384Z"
                        transform="translate(-544.926 -280.301)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_173" data-name="Path 173"
                        d="M581.826,282.515c.694.177.911,1.665.49,3.321s-1.326,2.856-2.02,2.679-.911-1.662-.49-3.318S581.134,282.341,581.826,282.515Z"
                        transform="translate(-548.149 -282.498)" fill="#4a1c00" fill-rule="evenodd" />
                    </g>
                  </g>
                  <g id="grape3" transform="translate(714.414 412.486)">
                    <g id="Group_22" data-name="Group 22">
                      <path id="Path_174" data-name="Path 174"
                        d="M633.723,290.557a25.006,25.006,0,1,0,25,25.006A25.005,25.005,0,0,0,633.723,290.557Z"
                        transform="translate(-608.717 -290.557)" fill="#5d2c50" fill-rule="evenodd" />
                      <path id="Path_175" data-name="Path 175"
                        d="M643.537,298.555c-6.991-7.246-18.984-7.017-26.785.509s-8.459,19.5-1.47,26.748,18.981,7.016,26.785-.51S650.525,305.8,643.537,298.555Z"
                        transform="translate(-607.911 -289.292)" fill="#69325c" fill-rule="evenodd" />
                      <path id="Path_176" data-name="Path 176"
                        d="M619.051,298.472c-7.766,6.337-7.692,18.836-2.26,14.57.805-.631,2.381-4.965,7.5-8.263,3.733-2.4,11.51-3.523,11.631-5.853C636.25,292.672,624.18,294.285,619.051,298.472Z"
                        transform="translate(-606.747 -288.589)" fill="#875c7b" fill-rule="evenodd" />
                    </g>
                    <path id="Path_177" data-name="Path 177"
                      d="M616.584,310.694a2.813,2.813,0,1,1-2.813,2.813A2.811,2.811,0,0,1,616.584,310.694Z"
                      transform="translate(-606.357 -281.156)" fill="#875c7b" fill-rule="evenodd" />
                  </g>
                  <g id="strawberry_fall" transform="translate(667.57 402.489)" opacity="1">
                    <path id="Path_178" data-name="Path 178"
                      d="M625.576,314.4c-18.967,2.612-28.234-9.435-30.735-18.026-1.573-5.413-.066-9.086,1.052-7.484,0,0-1.163,1.99,7.735,7.776,5.87,3.815,10.529,4.423,14.088,5.753C621.59,303.867,624.163,306.168,625.576,314.4Z"
                      transform="translate(-574.668 -288.514)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_179" data-name="Path 179"
                      d="M622.744,313.351c-17.068,1.1-25.538-10.159-27.91-18.312a16.791,16.791,0,0,1-.656-3.66c.971,1.229,2.937,3.047,6.872,5.6,5.87,3.812,10.529,4.423,14.088,5.753C618.79,304.1,621.286,306.221,622.744,313.351Z"
                      transform="translate(-574.661 -287.177)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_180" data-name="Path 180"
                      d="M610.967,302.751c.622,19.135,11.557,26.188,20.447,27.2,5.6.64,9.143-2.1,7.2-2.3-8.9-.885-10.837-15.117-11.912-17.432C624.623,305.754,618.467,300.74,610.967,302.751Z"
                      transform="translate(-566.823 -282.081)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_181" data-name="Path 181"
                      d="M611.152,305.256c1.845,16.3,11.9,22.481,20.175,23.427a12.806,12.806,0,0,0,5.936-.628c-7.735-1.624-10.592-14.083-11.783-16.16C623.248,308.016,617.63,303.982,611.152,305.256Z"
                      transform="translate(-566.736 -280.81)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_182" data-name="Path 182"
                      d="M637.931,342.783c16.245-21.215-29.881-59.836-48-40.537-10.856,11.559-12.366,43.294-2.278,51.411C598.527,362.409,628.864,354.629,637.931,342.783Z"
                      transform="translate(-580.873 -284.552)" fill="#ab1117" fill-rule="evenodd" />
                    <path id="Path_183" data-name="Path 183"
                      d="M633.75,339.712a14.308,14.308,0,0,0,2.973-7.788c-6.222-4.8-8.357-9.5-8.357-9.5a19.522,19.522,0,0,1-13.774,1.5l-7.487-2.089s7.8-.374,9.342-4.185-.842-9.34-.842-9.34-9.117-3-13.517-7.685a14.483,14.483,0,0,0-9.249,4.536C583.4,315.25,581.8,342.66,590.4,349.57,599.675,357.025,625.838,350.022,633.75,339.712Z"
                      transform="translate(-579.052 -282.856)" fill="#c21818" fill-rule="evenodd" />
                    <path id="Path_184" data-name="Path 184"
                      d="M610.22,309.921a1.5,1.5,0,0,0-2.29-1.93c-.758.839-1.32,2.976-.836,3.358C607.62,311.76,609.559,310.757,610.22,309.921Z"
                      transform="translate(-568.715 -279.655)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_185" data-name="Path 185"
                      d="M616.238,318.619a1.5,1.5,0,0,0-2.287-1.93c-.763.839-1.323,2.976-.839,3.358C613.636,320.456,615.575,319.457,616.238,318.619Z"
                      transform="translate(-565.905 -275.594)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_186" data-name="Path 186"
                      d="M600.63,305.456a1.5,1.5,0,0,0-2.285-1.93c-.763.836-1.325,2.976-.84,3.358C598.03,307.292,599.969,306.292,600.63,305.456Z"
                      transform="translate(-573.192 -281.74)" fill="#c89a37" fill-rule="evenodd" />
                    <g id="Group_24" data-name="Group 24" transform="translate(12.76 23.153)">
                      <path id="Path_187" data-name="Path 187"
                        d="M608.484,319.9a1.5,1.5,0,0,0-2.287-1.932c-.761.839-1.323,2.976-.836,3.358C605.882,321.732,607.821,320.732,608.484,319.9Z"
                        transform="translate(-582.285 -298.152)" fill="#c89a37" fill-rule="evenodd" />
                      <path id="Path_188" data-name="Path 188"
                        d="M614.5,328.6a1.5,1.5,0,0,0-2.288-1.935c-.76.84-1.322,2.978-.838,3.362C611.9,330.432,613.842,329.432,614.5,328.6Z"
                        transform="translate(-579.475 -294.091)" fill="#c89a37" fill-rule="evenodd" />
                      <path id="Path_189" data-name="Path 189"
                        d="M598.9,315.432a1.5,1.5,0,0,0-2.29-1.935c-.758.841-1.32,2.978-.836,3.361C596.294,317.268,598.235,316.268,598.9,315.432Z"
                        transform="translate(-586.761 -300.237)" fill="#c89a37" fill-rule="evenodd" />
                      <path id="Path_190" data-name="Path 190"
                        d="M592.876,306.731a1.5,1.5,0,0,0-2.285-1.933c-.76.841-1.325,2.979-.838,3.361C590.278,308.568,592.217,307.569,592.876,306.731Z"
                        transform="translate(-589.571 -304.298)" fill="#c89a37" fill-rule="evenodd" />
                    </g>
                    <path id="Path_191" data-name="Path 191"
                      d="M599.443,322.7a1.5,1.5,0,0,0-2.287-1.933c-.763.839-1.323,2.976-.836,3.361C596.841,324.535,598.78,323.533,599.443,322.7Z"
                      transform="translate(-573.746 -273.691)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_192" data-name="Path 192"
                      d="M605.463,331.4a1.5,1.5,0,0,0-2.288-1.932c-.76.839-1.324,2.976-.838,3.358C602.862,333.234,604.8,332.232,605.463,331.4Z"
                      transform="translate(-570.937 -269.629)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_193" data-name="Path 193"
                      d="M589.855,318.23a1.5,1.5,0,0,0-2.29-1.93c-.758.839-1.32,2.976-.836,3.358C587.253,320.071,589.194,319.068,589.855,318.23Z"
                      transform="translate(-578.222 -275.775)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_194" data-name="Path 194"
                      d="M597.624,332.774a1.5,1.5,0,0,0-2.288-1.935c-.76.839-1.322,2.976-.838,3.361C595.024,334.609,596.963,333.61,597.624,332.774Z"
                      transform="translate(-574.595 -268.988)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_195" data-name="Path 195"
                      d="M588.034,328.309a1.5,1.5,0,0,0-2.285-1.935c-.763.841-1.325,2.978-.839,3.358C585.433,330.145,587.373,329.142,588.034,328.309Z"
                      transform="translate(-579.073 -271.072)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_196" data-name="Path 196"
                      d="M623.467,310.029c2.008,4.511-.525,7.306-.21,12.151s5.29,9.394,5.29,9.394-5.137-.28-10.976-8.288-1.925-17.036-.926-18.218S622.226,305.546,623.467,310.029Z"
                      transform="translate(-565.204 -280.959)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_197" data-name="Path 197"
                      d="M628.334,331.212c-1.019-.151-5.618-1.206-10.764-8.261-5.182-7.108-2.681-15.016-1.358-17.533a3.566,3.566,0,0,1,1.9,1.074c2.073,2.453.339,9.623,1.349,14.792C620.384,326,626.226,330.024,628.334,331.212Z"
                      transform="translate(-565.204 -280.623)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_198" data-name="Path 198"
                      d="M616.683,298.461c-4.783-1.217-7.11,1.75-11.94,2.258s-10.151-3.63-10.151-3.63,1.143,5.014,10.022,9.42,17.115-.974,18.111-2.159S621.311,298.927,616.683,298.461Z"
                      transform="translate(-574.468 -284.511)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_199" data-name="Path 199"
                      d="M616.268,298.176c-4.783-1.217-7.11,1.75-11.94,2.258-3.367.352-6.971-1.55-8.848-2.736a25.846,25.846,0,0,0,7.177,5.025,16.32,16.32,0,0,0,11.443,1.171c3.6-.905,7.792-.169,8.323-.794a2.74,2.74,0,0,0-1.511-2.772A7.724,7.724,0,0,0,616.268,298.176Z"
                      transform="translate(-574.053 -284.227)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_200" data-name="Path 200"
                      d="M626.428,312.723c.123,8.437-10.909,11.66-17.949,10.58l-8.672-1.33s7.362-.6,10.3-6.174,1.04-11.918,2.542-14.161C615.6,297.228,626.279,302.648,626.428,312.723Z"
                      transform="translate(-572.033 -283.11)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_201" data-name="Path 201"
                      d="M615.118,307.034c-.424,7.752-5.464,12.905-9.521,13.634-5.077.911,8.1,2.128,14.165-2.746,5.2-4.17,3.532-12.049-2.118-15.731C615.458,300.767,615.191,305.678,615.118,307.034Z"
                      transform="translate(-569.862 -282.248)" fill="#6e9032" fill-rule="evenodd" />
                    <path id="Path_202" data-name="Path 202"
                      d="M617.295,304.588c6.812,10.421.37,14.872,4.1,19.047C620.493,318.008,626.8,309.848,617.295,304.588Z"
                      transform="translate(-563.868 -281.01)" fill="#6e9032" fill-rule="evenodd" />
                    <path id="Path_203" data-name="Path 203"
                      d="M617.9,301.5c-9.592-4.163-12.364,1.8-16.35-.7C606.337,300.756,612.2,294.373,617.9,301.5Z"
                      transform="translate(-571.219 -284.025)" fill="#6e9032" fill-rule="evenodd" />
                  </g>
                  <g id="banana2" transform="translate(738.205 434.022)">
                    <path id="Path_204" data-name="Path 204"
                      d="M629.414,311.256c-3.67,1.669-7.443,19.9-6.324,24.759,1.087,4.709,4.59,9.712,10.466,14.212,13.781,10.557,35.4,14.368,48.286,8.509,5.477-2.491,8.495-6.327,9.1-10.727.814-5.95,6.661-17.131-1.263-23.2C675.895,314.25,642.3,305.4,629.414,311.256Z"
                      transform="translate(-622.89 -304.302)" fill="#f1ce6c" fill-rule="evenodd" />
                    <path id="Path_205" data-name="Path 205"
                      d="M633.849,308.67c-12.886,5.863-12.162,19.17,1.621,29.73s35.4,14.368,48.286,8.509,12.162-19.17-1.621-29.727S646.736,302.811,633.849,308.67Z"
                      transform="translate(-622.074 -305.921)" fill="#f9f5c1" fill-rule="evenodd" />
                    <path id="Path_206" data-name="Path 206"
                      d="M634.524,309.255c-12.267,5.578-11.577,18.248,1.545,28.3s33.7,13.678,45.968,8.1,11.578-18.251-1.545-28.3S646.793,303.678,634.524,309.255Z"
                      transform="translate(-621.552 -305.586)" fill="#faf198" fill-rule="evenodd" />
                    <path id="Path_207" data-name="Path 207"
                      d="M656.368,313.68c-6.334,8.26-4.358,7.085-17.013,10.12,14.623,1.771,11.776.818,24.527,8.194C655.595,321.963,656.466,324.089,656.368,313.68Z"
                      transform="translate(-615.204 -302.298)" fill="#e0c76e" fill-rule="evenodd" />
                    <path id="Path_208" data-name="Path 208"
                      d="M652.027,312.787c-.508-.169-1.383,1.088-1.96,2.81s-.631,3.252-.123,3.421,1.383-1.088,1.96-2.808S652.535,312.958,652.027,312.787Z"
                      transform="translate(-610.422 -302.722)" fill="#8e6c36" fill-rule="evenodd" />
                    <path id="Path_209" data-name="Path 209"
                      d="M660.05,329.479c.349-.21-.937-1.68-2.874-3.284s-3.8-2.736-4.148-2.526.933,1.678,2.874,3.283S659.7,329.685,660.05,329.479Z"
                      transform="translate(-608.847 -297.646)" fill="#8e6c36" fill-rule="evenodd" />
                    <path id="Path_210" data-name="Path 210"
                      d="M646.119,320.484c-.156-.378-2.318-.591-4.833-.474s-4.424.516-4.269.895,2.321.593,4.833.475S646.273,320.862,646.119,320.484Z"
                      transform="translate(-616.299 -299.358)" fill="#8e6c36" fill-rule="evenodd" />
                    <path id="Path_211" data-name="Path 211"
                      d="M669.018,340.931c10.315-.285,17.211-2.561,21.384-7.923A56.552,56.552,0,0,0,688.949,339c-.6,4.4-3.619,8.236-9.1,10.727-12.886,5.859-34.5,2.048-48.286-8.509a38.727,38.727,0,0,1-4.415-3.922c.421-6.073,2.934-10.362,6.149-7.921C639.394,334,653.679,341.352,669.018,340.931Z"
                      transform="translate(-620.901 -295.295)" fill="#f5dd95" fill-rule="evenodd" />
                  </g>
                  <g id="grape_fall" transform="translate(713.687 870.246)" opacity="1">
                    <g id="Group_27" data-name="Group 27" transform="translate(0 -431.153)">
                      <path id="Path_212" data-name="Path 212"
                        d="M631.182,316.981a25,25,0,1,0,25.006,25A25,25,0,0,0,631.182,316.981Z"
                        transform="translate(-606.176 -316.981)" fill="#5d2c50" fill-rule="evenodd" />
                      <path id="Path_213" data-name="Path 213"
                        d="M641,324.977c-6.991-7.246-18.984-7.017-26.785.509s-8.459,19.5-1.47,26.75,18.984,7.017,26.785-.512S647.987,332.222,641,324.977Z"
                        transform="translate(-605.371 -315.717)" fill="#69325c" fill-rule="evenodd" />
                      <path id="Path_214" data-name="Path 214"
                        d="M616.51,324.892c-7.766,6.338-7.692,18.837-2.26,14.575.805-.634,2.381-4.968,7.507-8.266,3.73-2.4,11.51-3.523,11.628-5.853C633.709,319.094,621.639,320.707,616.51,324.892Z"
                        transform="translate(-604.206 -315.014)" fill="#875c7b" fill-rule="evenodd" />
                    </g>
                    <path id="Path_215" data-name="Path 215"
                      d="M614.043,337.118a2.812,2.812,0,1,1-2.813,2.813A2.812,2.812,0,0,1,614.043,337.118Z"
                      transform="translate(-603.817 -724.04)" fill="#875c7b" fill-rule="evenodd" />
                  </g>
                  <g id="apple3" transform="translate(517.653 406.384)">
                    <path id="Path_216" data-name="Path 216"
                      d="M560.343,328.543c-8.675,16.752-30.723,24.643-55.817,15.164-22.351-8.44-40.814-31.606-27.518-53.933l22.823,6.8a47.645,47.645,0,0,0,17.032,10.6,46.14,46.14,0,0,0,24.664,1.82l18.714,5.571C560.232,316.7,560.685,327.883,560.343,328.543Z"
                      transform="translate(-472.534 -285.821)" fill="#ab1117" fill-rule="evenodd" />
                    <path id="Path_217" data-name="Path 217"
                      d="M559.376,315.711c-4.723,23.545-31.1,30.905-53.643,22.986s-40.422-33.274-27.885-51.617l21.8,7.654a47.708,47.708,0,0,0,17.564,11.125,47.056,47.056,0,0,0,21.02,2.428Z"
                      transform="translate(-471.985 -287.079)" fill="#faf198" fill-rule="evenodd" />
                    <path id="Path_218" data-name="Path 218"
                      d="M502.224,301.681c.409.144.148,1.948-.282,3.177s-.87,1.416-1.281,1.273-.632-.565-.2-1.794S501.817,301.539,502.224,301.681Z"
                      transform="translate(-459.606 -280.266)" fill="#4a1c00" fill-rule="evenodd" />
                    <path id="Path_219" data-name="Path 219"
                      d="M495.586,297.422c.192.39-1.253,1.5-2.419,2.078s-1.612.406-1.8.019-.06-.848,1.106-1.427S495.394,297.033,495.586,297.422Z"
                      transform="translate(-463.778 -282.316)" fill="#4a1c00" fill-rule="evenodd" />
                    <path id="Path_220" data-name="Path 220"
                      d="M510.395,303.047c-.4.18.04,1.954.587,3.133s1,1.325,1.4,1.141.576-.622.029-1.8S510.786,302.864,510.395,303.047Z"
                      transform="translate(-454.93 -279.632)" fill="#4a1c00" fill-rule="evenodd" />
                    <path id="Path_221" data-name="Path 221"
                      d="M475.851,298.829c1.043,10.737,7.177,23.266,22.333,31.457,20.533,11.1,40.105,5.645,46.885-1.636s-1.264-16.325-5.65-17.755-5.26,9.925-21.979,4.719-23.875-11.383-25.823-15.955C488.623,292.643,474.774,287.732,475.851,298.829Z"
                      transform="translate(-471.013 -284.647)" fill="#fbf6c5" fill-rule="evenodd" />
                    <path id="Path_222" data-name="Path 222"
                      d="M479.779,314.307c5.361,8.767,23.831,20.361,44.23,19.2s26.351-10.847,25.67-11.752S518.253,347.363,479.779,314.307Z"
                      transform="translate(-469.152 -274.367)" fill="#c21818" fill-rule="evenodd" />
                  </g>
                  <g id="kiwi3" transform="translate(451.439 417.924)">
                    <path id="Path_223" data-name="Path 223"
                      d="M458.4,299.409c-22.421,0-35.629,18.174-29.5,40.6s29.265,40.6,51.689,40.6,35.629-18.177,29.5-40.6S480.82,299.409,458.4,299.409Z"
                      transform="translate(-427.394 -292.862)" fill="#748327" fill-rule="evenodd" />
                    <path id="Path_224" data-name="Path 224"
                      d="M461.374,294.946c-22.421,0-35.631,18.176-29.506,40.6s29.268,40.6,51.689,40.6,35.632-18.174,29.506-40.6S483.795,294.946,461.374,294.946Z"
                      transform="translate(-426.005 -294.946)" fill="#b1bd2b" fill-rule="evenodd" />
                    <path id="Path_225" data-name="Path 225"
                      d="M457.764,296l8.36,24.149L453.2,296.4l11.288,24.008L448.934,297.4l14.038,23.484-17.929-21.9,16.562,22.593-20.02-20.453,18.826,21.347-21.8-18.682,20.794,19.76-23.235-16.614L458.606,324.8,434.3,310.51l23.722,15.683-24.991-11.732,24.636,13.259-25.28-9,25.157,10.623-25.174-6.114,25.286,7.821-24.67-3.137,25.014,4.9-23.776-.112,24.349,1.894-22.51,2.916,23.3-1.14-20.883,5.9,21.88-4.154L441.425,346.9l20.118-7.1L444.86,351.339,462.9,341.4,448.734,355.5l15.671-12.62-11.428,16.451,13.064-15.1-8.512,18.539,10.245-17.344-5.458,20.333,7.266-19.316-2.321,21.805,4.171-20.98.854,22.937L473.3,347.89l4.017,23.7-2.166-23.3,7.117,24.1-5.306-23.911,10.1,24.112L478.7,348.445l12.927,23.745L480.34,348.182l15.551,23.006L481.856,347.7l17.926,21.9-16.562-22.593,20.023,20.453-18.828-21.347,21.8,18.682-20.8-19.76,23.238,16.614-22.435-17.863,24.3,14.288L486.8,342.395l24.991,11.735L487.159,340.87l25.283,9-25.16-10.626,25.174,6.117-25.286-7.824,24.67,3.14-25.014-4.9,23.776.115-24.346-1.894,22.507-2.917-23.3,1.137,20.885-5.9-21.88,4.154,18.932-8.787-20.118,7.1,16.68-11.537-18.038,9.941,14.167-14.107-15.674,12.62,11.428-16.451-13.061,15.1,8.509-18.536-10.245,17.344,5.461-20.333-7.266,19.315,2.321-21.808-4.174,20.983-.854-22.937L471.527,320.7,467.511,297l2.163,23.3-7.114-24.1,5.3,23.911Z"
                      transform="translate(-425.072 -294.456)" fill="#c1c753" fill-rule="evenodd" />
                    <path id="Path_226" data-name="Path 226"
                      d="M460.531,305.063c-14.224,0-22.607,11.531-18.719,25.757s18.568,25.755,32.792,25.755,22.6-11.531,18.717-25.755S474.757,305.063,460.531,305.063Z"
                      transform="translate(-421.107 -290.223)" fill="#748327" fill-rule="evenodd" />
                    <path id="Path_227" data-name="Path 227"
                      d="M460.058,310.717c-9.64,0-15.324,7.818-12.688,17.463s12.589,17.459,22.232,17.459,15.326-7.815,12.693-17.459S469.705,310.717,460.058,310.717Z"
                      transform="translate(-418.37 -287.583)" fill="#d9d69a" fill-rule="evenodd" />
                    <g id="Group_30" data-name="Group 30" transform="translate(19.593 13.857)">
                      <path id="Path_228" data-name="Path 228"
                        d="M454.193,304.393c-.694,0-.889,1.344-.436,3s1.38,3,2.074,3,.888-1.344.436-3S454.886,304.393,454.193,304.393Z"
                        transform="translate(-434.793 -304.393)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_229" data-name="Path 229"
                        d="M464.483,306.8c-.7-.346-1.614.535-2.049,1.971s-.229,2.879.468,3.226,1.612-.537,2.048-1.971S465.176,307.15,464.483,306.8Z"
                        transform="translate(-430.736 -303.303)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_230" data-name="Path 230"
                        d="M473.734,313.524c-.509-.6-1.905-.417-3.114.412s-1.773,1.988-1.263,2.589,1.905.414,3.114-.415S474.244,314.125,473.734,313.524Z"
                        transform="translate(-427.484 -300.296)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_231" data-name="Path 231"
                        d="M479.183,322.909c-.189-.692-1.688-1.254-3.344-1.254s-2.847.562-2.658,1.254,1.684,1.256,3.343,1.256S479.372,323.6,479.183,322.909Z"
                        transform="translate(-425.621 -296.334)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_232" data-name="Path 232"
                        d="M479.294,332.707c.183-.6-1.017-1.759-2.678-2.589s-3.157-1.012-3.34-.414,1.017,1.76,2.678,2.588S479.111,333.305,479.294,332.707Z"
                        transform="translate(-425.576 -292.741)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_233" data-name="Path 233"
                        d="M474.041,340.028c.5-.346-.075-1.791-1.3-3.226s-2.621-2.318-3.126-1.971.075,1.791,1.3,3.226S473.534,340.376,474.041,340.028Z"
                        transform="translate(-427.359 -290.218)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_234" data-name="Path 234"
                        d="M464.9,342.758c.691,0,.886-1.344.433-3s-1.38-3-2.074-3-.887,1.344-.436,3S464.2,342.758,464.9,342.758Z"
                        transform="translate(-430.561 -289.284)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_235" data-name="Path 235"
                        d="M454.6,340.142c.694.345,1.614-.538,2.048-1.973s.227-2.879-.466-3.226-1.614.535-2.051,1.97S453.9,339.793,454.6,340.142Z"
                        transform="translate(-434.611 -290.166)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_236" data-name="Path 236"
                        d="M445.914,332.9c.512.6,1.9.415,3.114-.414s1.775-1.988,1.263-2.586-1.9-.417-3.111.412S445.4,332.3,445.914,332.9Z"
                        transform="translate(-438.429 -292.651)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_237" data-name="Path 237"
                        d="M440.877,323.133c.189.694,1.685,1.254,3.343,1.254s2.849-.56,2.659-1.254-1.688-1.256-3.343-1.256S440.688,322.439,440.877,323.133Z"
                        transform="translate(-440.702 -296.23)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_238" data-name="Path 238"
                        d="M440.77,313.716c-.183.6,1.014,1.759,2.676,2.588s3.157,1.014,3.34.412-1.016-1.759-2.678-2.587S440.95,313.115,440.77,313.716Z"
                        transform="translate(-440.751 -300.205)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_239" data-name="Path 239"
                        d="M445.619,306.915c-.508.346.073,1.791,1.294,3.226s2.62,2.318,3.126,1.971-.075-1.791-1.3-3.226S446.123,306.569,445.619,306.915Z"
                        transform="translate(-438.564 -303.251)" fill="#4a1c00" fill-rule="evenodd" />
                    </g>
                    <g id="Group_31" data-name="Group 31" transform="translate(21.218 17.022)">
                      <path id="Path_240" data-name="Path 240"
                        d="M459.469,306.618c-.653-.169-1.193.868-1.2,2.324s.509,2.769,1.163,2.94,1.194-.868,1.206-2.321S460.125,306.789,459.469,306.618Z"
                        transform="translate(-434.199 -306.528)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_241" data-name="Path 241"
                        d="M468.706,311.008c-.563-.453-1.663.037-2.457,1.091s-.977,2.275-.414,2.727,1.665-.037,2.458-1.091S469.271,311.46,468.706,311.008Z"
                        transform="translate(-430.817 -304.548)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_242" data-name="Path 242"
                        d="M475.57,318.618c-.323-.61-1.687-.8-3.048-.433s-2.2,1.172-1.879,1.785,1.687.805,3.048.433S475.894,319.231,475.57,318.618Z"
                        transform="translate(-428.453 -301.207)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_243" data-name="Path 243"
                        d="M478.08,327.671c0-.607-1.26-1.432-2.824-1.839s-2.84-.246-2.843.361,1.26,1.433,2.825,1.839S478.075,328.279,478.08,327.671Z"
                        transform="translate(-427.594 -297.654)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_244" data-name="Path 244"
                        d="M475.539,335.725c.331-.441-.493-1.675-1.842-2.756s-2.714-1.6-3.042-1.157.493,1.677,1.842,2.756S475.209,336.164,475.539,335.725Z"
                        transform="translate(-428.45 -294.83)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_245" data-name="Path 245"
                        d="M468.654,340.37c.568-.154.4-1.467-.37-2.931s-1.859-2.522-2.429-2.363-.4,1.467.37,2.931S468.085,340.528,468.654,340.37Z"
                        transform="translate(-430.814 -293.24)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_246" data-name="Path 246"
                        d="M459.42,340.309c.653.173,1.194-.867,1.206-2.323s-.51-2.767-1.166-2.938-1.191.87-1.206,2.322S458.767,340.138,459.42,340.309Z"
                        transform="translate(-434.205 -293.255)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_247" data-name="Path 247"
                        d="M450.551,335.556c.565.452,1.665-.035,2.456-1.09s.977-2.274.412-2.727-1.663.038-2.454,1.091S449.987,335.106,450.551,335.556Z"
                        transform="translate(-437.954 -294.869)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_248" data-name="Path 248"
                        d="M444.176,327.449c.324.613,1.691.805,3.051.433s2.2-1.172,1.878-1.782-1.688-.805-3.048-.433S443.856,326.838,444.176,327.449Z"
                        transform="translate(-440.809 -297.715)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_249" data-name="Path 249"
                        d="M441.859,318.416c-.006.607,1.261,1.43,2.825,1.839s2.837.246,2.843-.361-1.261-1.433-2.825-1.839S441.865,317.806,441.859,318.416Z"
                        transform="translate(-441.859 -301.285)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_250" data-name="Path 250"
                        d="M444.2,310.863c-.33.442.5,1.674,1.845,2.753s2.709,1.6,3.042,1.157-.5-1.674-1.845-2.753S444.529,310.422,444.2,310.863Z"
                        transform="translate(-440.801 -304.611)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_251" data-name="Path 251"
                        d="M450.588,306.566c-.569.155-.4,1.467.367,2.931s1.863,2.522,2.431,2.366.4-1.47-.367-2.934S451.155,306.409,450.588,306.566Z"
                        transform="translate(-437.942 -306.55)" fill="#4a1c00" fill-rule="evenodd" />
                    </g>
                  </g>
                  <g id="blueberry_fall2" transform="translate(723.195 448.976)" opacity="1">
                    <path id="Path_252" data-name="Path 252"
                      d="M632.845,334.522a20.185,20.185,0,1,0,20.184,20.187A20.188,20.188,0,0,0,632.845,334.522Z"
                      transform="translate(-612.658 -334.522)" fill="#323446" fill-rule="evenodd" />
                    <path id="Path_253" data-name="Path 253"
                      d="M632.557,334.522c-24.816,0-22.576,33.841.951,33.841C658.327,368.362,656.084,334.522,632.557,334.522Z"
                      transform="translate(-611.619 -334.522)" fill="#50546e" fill-rule="evenodd" />
                    <path id="Path_254" data-name="Path 254"
                      d="M632.074,341.386c5.206-1.159,4.556-1.765,3.312,3.088,4.562,2.612,4.562,1.756,0,4.37,1.244,4.849,1.894,4.245-3.312,3.088-2.8,4.248-1.885,4.248-4.687,0-5.209,1.157-4.558,1.762-3.315-3.088-4.56-2.614-4.56-1.757,0-4.37-1.242-4.852-1.894-4.247,3.315-3.088C630.189,337.137,629.27,337.137,632.074,341.386Z"
                      transform="translate(-608.926 -332.805)" fill="#323446" fill-rule="evenodd" />
                    <path id="Path_255" data-name="Path 255"
                      d="M628.056,341.544a3.561,3.561,0,1,0,3.809,3.551A3.691,3.691,0,0,0,628.056,341.544Z"
                      transform="translate(-607.25 -331.244)" fill="#50546e" fill-rule="evenodd" />
                    <path id="Path_256" data-name="Path 256"
                      d="M621.532,337.412c-5.675,3.779-6.67,11.474-2.709,8.938.587-.374,1.859-3.048,5.568-4.987,2.7-1.41,8.178-1.927,8.355-3.381C633.215,334.082,625.276,334.919,621.532,337.412Z"
                      transform="translate(-610.897 -334.16)" fill="#666f86" fill-rule="evenodd" />
                  </g>
                  <g id="blueberry3" transform="translate(566.792 411.123)">
                    <path id="Path_257" data-name="Path 257"
                      d="M520.082,284.174a20.185,20.185,0,1,0,20.187,20.184A20.184,20.184,0,0,0,520.082,284.174Z"
                      transform="translate(-499.898 -284.174)" fill="#323446" fill-rule="evenodd" />
                    <path id="Path_258" data-name="Path 258"
                      d="M519.8,284.174c-24.816,0-22.576,33.839.951,33.839C545.564,318.013,543.324,284.174,519.8,284.174Z"
                      transform="translate(-498.859 -284.174)" fill="#50546e" fill-rule="evenodd" />
                    <path id="Path_259" data-name="Path 259"
                      d="M519.313,291.036c5.206-1.157,4.555-1.762,3.314,3.088,4.559,2.614,4.559,1.757,0,4.37,1.241,4.854,1.892,4.245-3.314,3.089-2.8,4.248-1.885,4.248-4.688,0-5.2,1.156-4.555,1.765-3.314-3.089-4.559-2.612-4.559-1.756,0-4.37-1.241-4.849-1.891-4.245,3.314-3.088C517.428,286.787,516.511,286.787,519.313,291.036Z"
                      transform="translate(-496.166 -282.458)" fill="#323446" fill-rule="evenodd" />
                    <ellipse id="Ellipse_4" data-name="Ellipse 4" cx="3.813" cy="3.553" rx="3.813" ry="3.553"
                      transform="translate(16.99 10.3)" fill="#50546e" />
                    <path id="Path_260" data-name="Path 260"
                      d="M508.769,287.064c-5.675,3.776-6.668,11.474-2.706,8.936.587-.376,1.858-3.048,5.567-4.986,2.7-1.411,8.179-1.927,8.354-3.38C520.456,283.732,512.517,284.571,508.769,287.064Z"
                      transform="translate(-498.137 -283.812)" fill="#666f86" fill-rule="evenodd" />
                  </g>
                  <g id="blueberry_fall1" transform="translate(792.634 436.314)" opacity="1">
                    <path id="Path_261" data-name="Path 261"
                      d="M674.048,317.709A20.187,20.187,0,1,0,694.232,337.9,20.187,20.187,0,0,0,674.048,317.709Z"
                      transform="translate(-653.861 -317.709)" fill="#323446" fill-rule="evenodd" />
                    <path id="Path_262" data-name="Path 262"
                      d="M673.76,317.709c-24.816,0-22.576,33.842.951,33.842C699.527,351.551,697.287,317.709,673.76,317.709Z"
                      transform="translate(-652.822 -317.709)" fill="#50546e" fill-rule="evenodd" />
                    <path id="Path_263" data-name="Path 263"
                      d="M673.276,324.573c5.2-1.157,4.558-1.762,3.314,3.089,4.562,2.612,4.562,1.756,0,4.368,1.244,4.851,1.891,4.247-3.314,3.089-2.8,4.248-1.883,4.248-4.688,0-5.206,1.157-4.555,1.762-3.314-3.089-4.559-2.612-4.559-1.756,0-4.368-1.241-4.851-1.892-4.247,3.314-3.089C671.392,320.325,670.473,320.325,673.276,324.573Z"
                      transform="translate(-650.129 -315.992)" fill="#323446" fill-rule="evenodd" />
                    <path id="Path_264" data-name="Path 264"
                      d="M669.256,324.731a3.563,3.563,0,1,0,3.814,3.553A3.687,3.687,0,0,0,669.256,324.731Z"
                      transform="translate(-648.453 -314.431)" fill="#50546e" fill-rule="evenodd" />
                    <path id="Path_265" data-name="Path 265"
                      d="M662.732,320.6c-5.672,3.776-6.667,11.472-2.706,8.936.587-.375,1.859-3.048,5.567-4.987,2.7-1.413,8.179-1.926,8.354-3.381C674.418,317.27,666.479,318.106,662.732,320.6Z"
                      transform="translate(-652.1 -317.346)" fill="#666f86" fill-rule="evenodd" />
                  </g>
                  <g id="mandarin_fall1" transform="translate(734.719 438.925)" opacity="1">
                    <path id="Path_266" data-name="Path 266"
                      d="M678.64,338.181c-10.836-1.41-29.742,2.209-41.973,15.206-16.476,17.507-15.911,43.231-4.4,60.671,5.708,8.649,14.475,15.739,24.058,17.3a29.244,29.244,0,0,0,11,.084c6.12-1.385,11.915-5.813,9.628-6.624-14.633-5.2-22.106-29.993-.309-53.945C688.607,357.733,705.209,342.911,678.64,338.181Z"
                      transform="translate(-623.923 -337.895)" fill="#d57b19" fill-rule="evenodd" />
                    <path id="Path_267" data-name="Path 267"
                      d="M668.684,428.756c13.595-6.822-15.72-34.515,5.982-58.366,9.724-10.683,22.513-22.475,12.687-29.056a34.694,34.694,0,0,0-7.529-2.128c-10.231-1.364-28.083,2.14-39.629,14.714-15.556,16.941-15.024,41.832-4.157,58.708C643.36,424,656.015,432.577,668.684,428.756Z"
                      transform="translate(-621.944 -337.413)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_268" data-name="Path 268"
                      d="M680.8,339.817c-10.027-1.338-27.521,2.1-38.838,14.419-15.25,16.6-14.726,41-4.073,57.54,7.827,12.153,21.868,21.054,35.37,14.479,12.979-6.324-14.474-32.721,5.7-55.434C690.016,358.357,705.38,344.3,680.8,339.817Z"
                      transform="translate(-621.009 -337.125)" fill="#e9b636" fill-rule="evenodd" />
                    <path id="Path_269" data-name="Path 269"
                      d="M653.994,344.2c8.5,11.155,3.645,6.211,14.563,14.834v0C660.057,347.875,664.912,352.817,653.994,344.2Z"
                      transform="translate(-609.883 -334.954)" fill="#d57b19" fill-rule="evenodd" />
                    <path id="Path_270" data-name="Path 270"
                      d="M676.291,342.667c-8.143-1.143-23.631,3.142-32.821,13.686-12.383,14.207-11.958,35.084-3.306,49.234,6.357,10.4,13.162,18.56,24.125,12.93,10.544-5.41-11.754-28,4.628-47.435C677.9,360.419,696.26,346.506,676.291,342.667Z"
                      transform="translate(-619.268 -335.751)" fill="#efc84b" fill-rule="evenodd" />
                    <path id="Path_271" data-name="Path 271"
                      d="M659.294,382.809a31.017,31.017,0,0,1,5.552-20.184,12.086,12.086,0,0,0-6.432,4.679C652.249,375.868,660.056,393.458,659.294,382.809Z"
                      transform="translate(-608.935 -326.35)" fill="#f1d88c" fill-rule="evenodd" />
                    <path id="Path_272" data-name="Path 272"
                      d="M635.68,366.485c.908-1.668,14.324.767,25.312,4.449C650.162,371.27,635.193,367.9,635.68,366.485Z"
                      transform="translate(-618.439 -324.798)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_273" data-name="Path 273"
                      d="M642.122,352.451c1.636-.962,11.883,8.034,19.406,16.85C652.072,364.011,640.975,353.41,642.122,352.451Z"
                      transform="translate(-615.464 -331.133)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_274" data-name="Path 274"
                      d="M655.018,344.36c1.476-.045,5.114,9.913,6.962,18.727C657.5,355.957,653.879,344.589,655.018,344.36Z"
                      transform="translate(-609.504 -334.877)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_275" data-name="Path 275"
                      d="M637.846,380.8c.873,1.435,12.631-1.292,22.189-5.017C650.444,375.95,637.353,379.571,637.846,380.8Z"
                      transform="translate(-617.429 -320.207)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_276" data-name="Path 276"
                      d="M644.506,394.6c1.132.654,8.14-5.589,13.274-11.691C651.3,386.593,643.713,393.942,644.506,394.6Z"
                      transform="translate(-614.34 -316.881)" fill="#dc9118" fill-rule="evenodd" />
                  </g>
                  <g id="mandarin3" transform="translate(543.218 416.947)">
                    <path id="Path_277" data-name="Path 277"
                      d="M578.354,285.414c5.266,9.571,8.8,28.494,1.166,44.625-10.283,21.733-34.437,30.6-54.875,26.248-10.136-2.158-19.938-7.729-24.891-16.078A29.346,29.346,0,0,1,495.659,330c-.946-6.2,1.063-13.216,2.654-11.386,10.179,11.728,35.989,9.63,50.331-19.409C556.511,283.274,564.247,262.405,578.354,285.414Z"
                      transform="translate(-495.416 -272.186)" fill="#d57b19" fill-rule="evenodd" />
                    <path id="Path_278" data-name="Path 278"
                      d="M496.15,326.082c1.388-15.144,37.873,2.037,52.151-26.879,6.4-12.949,12.706-29.163,22.418-22.415a34.642,34.642,0,0,1,4.731,6.234c5,9.024,8.263,26.921.77,42.26-10.091,20.671-33.459,29.261-53.135,25.3C509.826,347.922,497.216,339.275,496.15,326.082Z"
                      transform="translate(-495.073 -272.186)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_279" data-name="Path 279"
                      d="M573.925,282.532c4.905,8.848,8.1,26.387.757,41.423-9.894,20.257-32.793,28.674-52.079,24.8-14.173-2.85-27.59-12.672-26.395-27.641,1.146-14.393,35.743,1.527,49.526-25.544C553.3,280.716,560.771,261.283,573.925,282.532Z"
                      transform="translate(-495.081 -273.147)" fill="#e9b636" fill-rule="evenodd" />
                    <path id="Path_280" data-name="Path 280"
                      d="M555,293.716c-13.488-3.839-7.114-1.125-19.126-8.141h0C549.361,289.414,542.987,286.7,555,293.716Z"
                      transform="translate(-476.528 -267.345)" fill="#d57b19" fill-rule="evenodd" />
                    <path id="Path_281" data-name="Path 281"
                      d="M568.287,284.353c4.037,7.163,5.7,23.146-.76,35.552-8.706,16.716-28.294,23.942-44.628,21.057-12-2.123-22.082-5.48-20.846-17.743,1.19-11.789,30.358.722,42.471-21.624C551.172,289.333,557.42,267.162,568.287,284.353Z"
                      transform="translate(-492.365 -270.853)" fill="#efc84b" fill-rule="evenodd" />
                    <path id="Path_282" data-name="Path 282"
                      d="M518.322,302.9a31.032,31.032,0,0,0,16.762-12.54,12.065,12.065,0,0,1-2.008,7.7C527.357,306.926,508.127,306.081,518.322,302.9Z"
                      transform="translate(-486.091 -265.109)" fill="#f1d88c" fill-rule="evenodd" />
                    <path id="Path_283" data-name="Path 283"
                      d="M539.268,323.237c1.22-1.452-5.945-13.055-13.385-21.94C529.524,311.5,538.13,324.209,539.268,323.237Z"
                      transform="translate(-481.192 -260.005)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_284" data-name="Path 284"
                      d="M552.839,309c.3-1.876-11.818-8.129-22.771-11.915C538.445,303.958,552.364,310.418,552.839,309Z"
                      transform="translate(-479.239 -261.971)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_285" data-name="Path 285"
                      d="M554.766,290.586c-.5-1.391-11.092-1.141-19.977.355C543.066,292.51,554.97,291.731,554.766,290.586Z"
                      transform="translate(-477.035 -265.433)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_286" data-name="Path 286"
                      d="M523.312,326.1c-1.656-.289-3.409-12.231-3.435-22.487C523.226,312.6,524.635,326.113,523.312,326.1Z"
                      transform="translate(-483.996 -258.923)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_287" data-name="Path 287"
                      d="M508.985,322.309c-1.022-.816,2.228-9.617,6.036-16.625C513.954,313.067,509.884,322.808,508.985,322.309Z"
                      transform="translate(-489.17 -257.956)" fill="#dc9118" fill-rule="evenodd" />
                  </g>
                  <g id="mandarin2" transform="translate(635.059 419.588)">
                    <path id="Path_288" data-name="Path 288"
                      d="M557.284,308.865c-4.905,9.763-7.726,28.8.5,44.639,11.089,21.333,35.56,29.287,55.821,24.177,10.047-2.532,19.632-8.468,24.272-17a29.373,29.373,0,0,0,3.71-10.356c.71-6.234-1.556-13.168-3.078-11.277-9.735,12.1-35.6,10.968-51.022-17.513C579.029,305.911,570.522,285.347,557.284,308.865Z"
                      transform="translate(-552.573 -295.081)" fill="#d57b19" fill-rule="evenodd" />
                    <path id="Path_289" data-name="Path 289"
                      d="M639.721,346.447c-1.951-15.084-37.769,3.447-53.119-24.91-6.88-12.7-13.789-28.67-23.244-21.561a34.532,34.532,0,0,0-4.491,6.4c-4.665,9.207-7.249,27.213.808,42.263,10.858,20.279,34.531,27.988,54.049,23.3C626.871,368.78,639.147,359.669,639.721,346.447Z"
                      transform="translate(-551.684 -295.081)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_290" data-name="Path 290"
                      d="M559.846,305.873c-4.574,9.026-7.105,26.673.794,41.423,10.639,19.872,33.84,27.429,52.97,22.833,14.055-3.378,27.094-13.695,25.343-28.61-1.687-14.339-35.662,2.865-50.448-23.672C580.39,303.289,572.195,284.148,559.846,305.873Z"
                      transform="translate(-551.186 -296.08)" fill="#e9b636" fill-rule="evenodd" />
                    <path id="Path_291" data-name="Path 291"
                      d="M559.162,317.136c13.337-4.34,7.067-1.389,18.811-8.85h0C564.638,312.624,570.906,309.675,559.162,317.136Z"
                      transform="translate(-549.497 -290.382)" fill="#d57b19" fill-rule="evenodd" />
                    <path id="Path_292" data-name="Path 292"
                      d="M561.518,307.578c-3.767,7.308-4.833,23.344,2.086,35.5,9.326,16.379,29.171,22.865,45.387,19.37,11.915-2.57,21.859-6.3,20.167-18.507-1.628-11.735-30.31,1.857-43.25-20.021C578.805,311.915,571.732,290,561.518,307.578Z"
                      transform="translate(-549.785 -293.783)" fill="#efc84b" fill-rule="evenodd" />
                    <path id="Path_293" data-name="Path 293"
                      d="M596.444,324.709a31.013,31.013,0,0,1-17.218-11.9,12.044,12.044,0,0,0,2.294,7.616C587.565,329.07,606.749,327.506,596.444,324.709Z"
                      transform="translate(-540.143 -288.272)" fill="#f1d88c" fill-rule="evenodd" />
                    <path id="Path_294" data-name="Path 294"
                      d="M574.048,346.049c-1.275-1.41,5.452-13.268,12.555-22.427C583.345,333.959,575.22,346.974,574.048,346.049Z"
                      transform="translate(-542.62 -283.222)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_295" data-name="Path 295"
                      d="M563.011,332.326c-.367-1.861,11.506-8.563,22.309-12.757C577.207,326.751,563.537,333.724,563.011,332.326Z"
                      transform="translate(-547.704 -285.115)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_296" data-name="Path 296"
                      d="M559.635,313.841c.443-1.407,11.044-1.555,19.977-.392C571.4,315.326,559.474,314.993,559.635,313.841Z"
                      transform="translate(-549.276 -288.335)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_297" data-name="Path 297"
                      d="M587.068,348.313c1.641-.351,2.948-12.351,2.59-22.6C586.647,334.818,585.745,348.374,587.068,348.313Z"
                      transform="translate(-536.746 -282.247)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_298" data-name="Path 298"
                      d="M602.21,343.914c.992-.854-2.59-9.526-6.655-16.388C596.9,334.863,601.33,344.446,602.21,343.914Z"
                      transform="translate(-532.506 -281.4)" fill="#dc9118" fill-rule="evenodd" />
                  </g>
                  <g id="banana" transform="translate(466.459 462.784)">
                    <path id="Path_299" data-name="Path 299"
                      d="M502,330.863c3.67,1.668,7.443,19.9,6.322,24.759-1.085,4.71-4.59,9.712-10.466,14.214-13.78,10.557-35.4,14.366-48.286,8.508-5.477-2.489-8.495-6.325-9.1-10.726-.813-5.951-6.661-17.133,1.264-23.2C455.52,333.857,489.117,325,502,330.863Z"
                      transform="translate(-437.632 -323.91)" fill="#f1ce6c" fill-rule="evenodd" />
                    <path id="Path_300" data-name="Path 300"
                      d="M496.752,328.278c12.886,5.859,12.162,19.169-1.622,29.727s-35.4,14.369-48.286,8.511-12.162-19.169,1.622-29.729S483.864,322.42,496.752,328.278Z"
                      transform="translate(-437.634 -325.528)" fill="#f9f5c1" fill-rule="evenodd" />
                    <path id="Path_301" data-name="Path 301"
                      d="M495.031,328.864c12.267,5.577,11.578,18.246-1.545,28.3s-33.7,13.677-45.967,8.1-11.578-18.249,1.543-28.3S482.764,323.285,495.031,328.864Z"
                      transform="translate(-437.112 -325.194)" fill="#faf198" fill-rule="evenodd" />
                    <path id="Path_302" data-name="Path 302"
                      d="M460.292,333.288c6.335,8.26,4.358,7.085,17.013,10.118-14.623,1.771-11.774.817-24.527,8.194C461.066,341.57,460.195,343.7,460.292,333.288Z"
                      transform="translate(-430.564 -321.906)" fill="#e0c76e" fill-rule="evenodd" />
                    <path id="Path_303" data-name="Path 303"
                      d="M457.711,332.394c.506-.169,1.383,1.088,1.96,2.808s.629,3.255.123,3.424-1.385-1.088-1.96-2.808S457.2,332.563,457.711,332.394Z"
                      transform="translate(-428.423 -322.33)" fill="#8e6c36" fill-rule="evenodd" />
                    <path id="Path_304" data-name="Path 304"
                      d="M451.075,349.083c-.351-.21.936-1.68,2.874-3.28s3.8-2.737,4.148-2.527-.937,1.68-2.874,3.283S451.427,349.3,451.075,349.083Z"
                      transform="translate(-431.385 -317.254)" fill="#8e6c36" fill-rule="evenodd" />
                    <path id="Path_305" data-name="Path 305"
                      d="M465.638,340.091c.154-.378,2.318-.59,4.833-.475s4.423.518,4.269.9-2.321.591-4.833.477S465.482,340.47,465.638,340.091Z"
                      transform="translate(-424.564 -318.966)" fill="#8e6c36" fill-rule="evenodd" />
                    <path id="Path_306" data-name="Path 306"
                      d="M459.966,360.539c-10.314-.283-17.209-2.561-21.384-7.924a56.673,56.673,0,0,1,1.452,6c.6,4.4,3.619,8.236,9.1,10.726,12.888,5.859,34.506,2.049,48.286-8.508a39.143,39.143,0,0,0,4.415-3.922c-.421-6.074-2.934-10.363-6.148-7.925C489.589,353.606,475.3,360.957,459.966,360.539Z"
                      transform="translate(-437.191 -314.904)" fill="#f5dd95" fill-rule="evenodd" />
                  </g>
                  <g id="kiwi_fall" transform="translate(562.732 423.375)" opacity="1">
                    <path id="Path_307" data-name="Path 307"
                      d="M560.793,304.491c22.421,0,35.632,18.174,29.506,40.6s-29.268,40.6-51.689,40.6-35.632-18.174-29.506-40.6S538.372,304.491,560.793,304.491Z"
                      transform="translate(-503.239 -297.941)" fill="#748327" fill-rule="evenodd" />
                    <path id="Path_308" data-name="Path 308"
                      d="M557.817,300.026c22.421,0,35.631,18.176,29.506,40.6s-29.268,40.6-51.689,40.6-35.631-18.177-29.507-40.6S535.4,300.026,557.817,300.026Z"
                      transform="translate(-504.629 -300.026)" fill="#b1bd2b" fill-rule="evenodd" />
                    <path id="Path_309" data-name="Path 309"
                      d="M560.123,301.079l-8.363,24.149,12.927-23.745L553.4,325.488l15.551-23.006-14.036,23.487,17.926-21.9L556.278,326.66,576.3,306.207l-18.826,21.344,21.8-18.68-20.8,19.76,23.238-16.617L559.28,329.877l24.3-14.288-23.722,15.686,24.991-11.735L560.217,332.8l25.283-8.993L560.34,334.43l25.174-6.114-25.286,7.821L584.9,333l-25.014,4.9,23.776-.115-24.346,1.9,22.507,2.914-23.3-1.137,20.886,5.9L557.53,343.2l18.932,8.787-20.118-7.105,16.68,11.537-18.038-9.939,14.167,14.1-15.674-12.62,11.428,16.453-13.061-15.1,8.512,18.539-10.245-17.347,5.458,20.333L548.3,351.525l2.321,21.805-4.172-20.98-.857,22.934-1.011-22.312-4.017,23.7,2.163-23.3-7.114,24.1,5.3-23.914-10.1,24.114,8.36-24.152-12.927,23.748,11.288-24.008L522,376.27l14.035-23.484-17.929,21.9,16.562-22.593-20.02,20.453L533.47,351.2l-21.8,18.679,20.794-19.76L509.23,366.738l22.435-17.863-24.306,14.288,23.725-15.686-24.991,11.732,24.633-13.259-25.28,9L530.6,344.322l-25.174,6.114,25.286-7.821-24.67,3.137,25.017-4.9-23.779.115,24.349-1.894-22.51-2.916,23.3,1.137-20.883-5.9,21.88,4.151-18.932-8.787,20.118,7.105-16.683-11.537,18.038,9.939-14.164-14.1,15.674,12.62-11.431-16.451,13.064,15.1L530.588,310.9l10.245,17.347-5.458-20.333,7.265,19.313-2.321-21.805,4.171,20.98.854-22.934,1.014,22.315,4.017-23.7-2.163,23.3,7.114-24.1-5.306,23.914Z"
                      transform="translate(-504.256 -299.535)" fill="#c1c753" fill-rule="evenodd" />
                    <path id="Path_310" data-name="Path 310"
                      d="M548.865,310.145c14.224,0,22.6,11.528,18.72,25.754s-18.571,25.755-32.793,25.755-22.607-11.531-18.719-25.755S534.64,310.145,548.865,310.145Z"
                      transform="translate(-499.731 -295.302)" fill="#748327" fill-rule="evenodd" />
                    <path id="Path_311" data-name="Path 311"
                      d="M543.861,315.8c9.643,0,15.324,7.818,12.691,17.463s-12.589,17.461-22.232,17.461-15.327-7.818-12.691-17.461S534.218,315.8,543.861,315.8Z"
                      transform="translate(-496.993 -292.663)" fill="#d9d69a" fill-rule="evenodd" />
                    <g id="Group_40" data-name="Group 40" transform="translate(15.228 13.86)">
                      <path id="Path_312" data-name="Path 312"
                        d="M539.159,309.475c.694,0,.888,1.344.433,3s-1.382,3-2.074,3-.889-1.344-.436-3S538.465,309.475,539.159,309.475Z"
                        transform="translate(-504.82 -309.475)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_313" data-name="Path 313"
                        d="M528.861,311.886c.692-.348,1.612.535,2.048,1.971s.226,2.879-.466,3.226-1.614-.535-2.049-1.971S528.164,312.232,528.861,311.886Z"
                        transform="translate(-508.87 -308.385)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_314" data-name="Path 314"
                        d="M520.172,318.606c.514-.6,1.906-.417,3.114.412s1.776,1.988,1.267,2.588-1.905.415-3.114-.414S519.663,319.2,520.172,318.606Z"
                        transform="translate(-512.688 -305.378)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_315" data-name="Path 315"
                        d="M515.137,327.992c.189-.7,1.684-1.257,3.343-1.257s2.849.562,2.659,1.257-1.688,1.256-3.344,1.256S514.948,328.683,515.137,327.992Z"
                        transform="translate(-514.96 -301.417)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_316" data-name="Path 316"
                        d="M515.029,337.786c-.183-.6,1.015-1.759,2.677-2.586s3.157-1.015,3.34-.414-1.016,1.76-2.678,2.588S515.209,338.387,515.029,337.786Z"
                        transform="translate(-515.01 -297.823)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_317" data-name="Path 317"
                        d="M519.878,345.11c-.506-.346.075-1.79,1.3-3.226s2.618-2.318,3.126-1.971-.075,1.791-1.3,3.226S520.383,345.458,519.878,345.11Z"
                        transform="translate(-512.823 -295.3)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_318" data-name="Path 318"
                        d="M528.452,347.84c-.692,0-.887-1.344-.436-3s1.382-3,2.076-3,.887,1.344.434,3S529.146,347.84,528.452,347.84Z"
                        transform="translate(-509.052 -294.366)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_319" data-name="Path 319"
                        d="M538.743,345.222c-.7.346-1.613-.537-2.049-1.971s-.229-2.88.467-3.227,1.614.537,2.049,1.971S539.435,344.875,538.743,345.222Z"
                        transform="translate(-504.994 -295.248)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_320" data-name="Path 320"
                        d="M547.994,337.98c-.51.6-1.905.415-3.114-.414s-1.773-1.988-1.263-2.586,1.9-.417,3.114.412S548.5,337.38,547.994,337.98Z"
                        transform="translate(-501.743 -297.733)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_321" data-name="Path 321"
                        d="M553.441,328.213c-.189.694-1.687,1.256-3.343,1.256s-2.847-.562-2.658-1.256,1.684-1.256,3.343-1.256S553.63,327.519,553.441,328.213Z"
                        transform="translate(-499.879 -301.313)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_322" data-name="Path 322"
                        d="M553.555,318.8c.183.6-1.018,1.756-2.678,2.585s-3.158,1.014-3.342.415,1.018-1.759,2.678-2.587S553.371,318.2,553.555,318.8Z"
                        transform="translate(-499.834 -305.287)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_323" data-name="Path 323"
                        d="M548.3,312c.5.343-.075,1.791-1.3,3.226s-2.621,2.318-3.126,1.971.075-1.791,1.3-3.226S547.794,311.651,548.3,312Z"
                        transform="translate(-501.618 -308.333)" fill="#4a1c00" fill-rule="evenodd" />
                    </g>
                    <g id="Group_41" data-name="Group 41" transform="translate(16.854 17.025)">
                      <path id="Path_324" data-name="Path 324"
                        d="M533.679,311.7c.653-.172,1.194.868,1.206,2.321s-.51,2.771-1.166,2.943-1.193-.871-1.2-2.324S533.025,311.872,533.679,311.7Z"
                        transform="translate(-508.464 -311.61)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_325" data-name="Path 325"
                        d="M524.811,316.09c.565-.453,1.665.037,2.456,1.088s.977,2.278.412,2.727-1.665-.037-2.456-1.088S524.246,316.539,524.811,316.09Z"
                        transform="translate(-512.214 -309.63)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_326" data-name="Path 326"
                        d="M518.438,323.7c.321-.609,1.687-.8,3.048-.433s2.2,1.172,1.876,1.785-1.687.805-3.048.43S518.114,324.311,518.438,323.7Z"
                        transform="translate(-515.069 -306.289)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_327" data-name="Path 327"
                        d="M516.119,332.751c-.006-.6,1.262-1.429,2.825-1.839s2.837-.246,2.841.362-1.26,1.432-2.824,1.838S516.125,333.361,516.119,332.751Z"
                        transform="translate(-516.119 -302.737)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_328" data-name="Path 328"
                        d="M518.457,340.8c-.33-.442.494-1.672,1.844-2.753s2.711-1.6,3.044-1.157-.5,1.674-1.845,2.753S518.789,341.246,518.457,340.8Z"
                        transform="translate(-515.061 -299.912)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_329" data-name="Path 329"
                        d="M524.848,345.453c-.569-.154-.4-1.467.367-2.931s1.863-2.522,2.429-2.366.4,1.47-.367,2.931S525.415,345.611,524.848,345.453Z"
                        transform="translate(-512.202 -298.323)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_330" data-name="Path 330"
                        d="M533.729,345.393c-.654.169-1.193-.871-1.2-2.325s.51-2.767,1.163-2.938,1.2.867,1.207,2.321S534.385,345.22,533.729,345.393Z"
                        transform="translate(-508.46 -298.337)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_331" data-name="Path 331"
                        d="M542.967,340.639c-.565.452-1.665-.038-2.458-1.093s-.977-2.274-.412-2.727,1.665.038,2.458,1.091S543.531,340.186,542.967,340.639Z"
                        transform="translate(-505.078 -299.952)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_332" data-name="Path 332"
                        d="M549.83,332.531c-.323.61-1.687.805-3.048.433s-2.2-1.172-1.879-1.785,1.687-.805,3.048-.433S550.154,331.918,549.83,332.531Z"
                        transform="translate(-502.713 -302.797)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_333" data-name="Path 333"
                        d="M552.34,323.5c0,.607-1.26,1.433-2.825,1.839s-2.836.249-2.841-.361,1.26-1.43,2.825-1.839S552.335,322.888,552.34,323.5Z"
                        transform="translate(-501.854 -306.368)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_334" data-name="Path 334"
                        d="M549.8,315.943c.332.442-.493,1.677-1.842,2.756s-2.714,1.6-3.042,1.157.493-1.675,1.841-2.756S549.469,315.5,549.8,315.943Z"
                        transform="translate(-502.71 -309.694)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_335" data-name="Path 335"
                        d="M542.914,311.648c.568.155.4,1.467-.37,2.928s-1.86,2.524-2.429,2.366-.4-1.467.37-2.931S542.344,311.491,542.914,311.648Z"
                        transform="translate(-505.074 -311.632)" fill="#4a1c00" fill-rule="evenodd" />
                    </g>
                  </g>
                  <g id="grape2" transform="translate(523.971 472.461)">
                    <g id="Group_43" data-name="Group 43">
                      <path id="Path_336" data-name="Path 336"
                        d="M500,323.167a25,25,0,1,0,25,25A25,25,0,0,0,500,323.167Z"
                        transform="translate(-469.705 -319.308)" fill="#5d2c50" fill-rule="evenodd" />
                      <ellipse id="Ellipse_5" data-name="Ellipse 5" cx="19.63" cy="18.228" rx="19.63" ry="18.228"
                        transform="translate(0 27.262) rotate(-43.977)" fill="#69325c" />
                      <path id="Path_337" data-name="Path 337"
                        d="M485.325,331.078c-7.767,6.337-7.692,18.837-2.26,14.575.805-.634,2.381-4.968,7.506-8.266,3.73-2.4,11.509-3.525,11.629-5.853C502.524,325.282,490.453,326.894,485.325,331.078Z"
                        transform="translate(-467.735 -317.34)" fill="#875c7b" fill-rule="evenodd" />
                    </g>
                    <path id="Path_338" data-name="Path 338"
                      d="M482.858,343.3a2.812,2.812,0,1,1-2.813,2.81A2.813,2.813,0,0,1,482.858,343.3Z"
                      transform="translate(-467.345 -309.907)" fill="#875c7b" fill-rule="evenodd" />
                  </g>
                  <g id="grape" transform="translate(626.415 460.001)">
                    <g id="Group_45" data-name="Group 45">
                      <path id="Path_339" data-name="Path 339"
                        d="M571.686,323.631a25,25,0,1,0,25,25A25,25,0,0,0,571.686,323.631Z"
                        transform="translate(-546.68 -323.631)" fill="#5d2c50" fill-rule="evenodd" />
                      <path id="Path_340" data-name="Path 340"
                        d="M581.5,331.627c-6.991-7.246-18.981-7.016-26.782.51s-8.461,19.5-1.47,26.747,18.98,7.016,26.782-.51S588.489,338.872,581.5,331.627Z"
                        transform="translate(-545.874 -322.367)" fill="#69325c" fill-rule="evenodd" />
                      <path id="Path_341" data-name="Path 341"
                        d="M557.016,331.543c-7.77,6.337-7.692,18.836-2.263,14.57.805-.629,2.381-4.964,7.507-8.264,3.732-2.4,11.51-3.522,11.631-5.851C574.215,325.745,562.144,327.357,557.016,331.543Z"
                        transform="translate(-544.709 -321.664)" fill="#875c7b" fill-rule="evenodd" />
                    </g>
                    <path id="Path_342" data-name="Path 342"
                      d="M554.546,343.768a2.812,2.812,0,1,1-2.81,2.81A2.81,2.81,0,0,1,554.546,343.768Z"
                      transform="translate(-544.319 -314.23)" fill="#875c7b" fill-rule="evenodd" />
                  </g>
                  <g id="strawberry_fall3" transform="translate(507.13 436.38)" opacity="1">
                    <path id="Path_343" data-name="Path 343"
                      d="M479.754,361.819c19,2.326,28.087-9.859,30.461-18.49,1.489-5.433-.072-9.083-1.163-7.463,0,0,1.191,1.973-7.619,7.89-5.813,3.9-10.463,4.584-14,5.964C483.578,351.224,481.04,353.565,479.754,361.819Z"
                      transform="translate(-458.64 -335.479)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_344" data-name="Path 344"
                      d="M481.682,360.731c17.083.848,25.383-10.542,27.633-18.733a16.836,16.836,0,0,0,.6-3.667c-.952,1.245-2.891,3.091-6.787,5.706-5.813,3.9-10.46,4.584-14,5.966C485.494,351.42,483.034,353.58,481.682,360.731Z"
                      transform="translate(-457.74 -334.148)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_345" data-name="Path 345"
                      d="M493.158,349.941c-.333,19.141-11.163,26.358-20.036,27.507-5.589.725-9.171-1.966-7.23-2.188,8.886-1.018,10.608-15.279,11.648-17.611C479.549,353.147,485.629,348.041,493.158,349.941Z"
                      transform="translate(-465.36 -328.918)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_346" data-name="Path 346"
                      d="M492.364,352.454c-1.6,16.322-11.557,22.656-19.82,23.725a12.773,12.773,0,0,1-5.944-.538c7.708-1.74,10.379-14.242,11.54-16.336C480.311,355.394,485.869,351.274,492.364,352.454Z"
                      transform="translate(-464.781 -327.65)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_347" data-name="Path 347"
                      d="M477.027,390.284c-16.559-20.966,28.975-60.278,47.388-41.255,11.028,11.4,13.013,43.107,3.051,51.372C516.723,409.316,486.274,401.994,477.027,390.284Z"
                      transform="translate(-461.576 -331.513)" fill="#ab1117" fill-rule="evenodd" />
                    <path id="Path_348" data-name="Path 348"
                      d="M478.472,387.171a14.345,14.345,0,0,1-3.091-7.741c6.151-4.9,8.213-9.623,8.213-9.623a19.522,19.522,0,0,0,13.8,1.294l7.455-2.2s-7.807-.257-9.4-4.041.7-9.351.7-9.351,9.071-3.135,13.4-7.887a14.471,14.471,0,0,1,9.312,4.395c9.6,9.935,11.6,37.318,3.108,44.361C512.8,403.97,486.539,397.363,478.472,387.171Z"
                      transform="translate(-460.682 -329.81)" fill="#c21818" fill-rule="evenodd" />
                    <path id="Path_349" data-name="Path 349"
                      d="M486.321,357.105a1.5,1.5,0,0,1,2.257-1.969c.773.827,1.367,2.957.889,3.346C488.951,358.9,486.994,357.93,486.321,357.105Z"
                      transform="translate(-455.739 -326.527)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_350" data-name="Path 350"
                      d="M480.434,365.891a1.5,1.5,0,0,1,2.257-1.966c.775.829,1.367,2.957.889,3.346C483.064,367.69,481.107,366.719,480.434,365.891Z"
                      transform="translate(-458.487 -322.424)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_351" data-name="Path 351"
                      d="M495.841,352.495a1.5,1.5,0,0,1,2.26-1.967c.773.827,1.366,2.956.885,3.346C498.47,354.292,496.516,353.321,495.841,352.495Z"
                      transform="translate(-451.294 -328.679)" fill="#c89a37" fill-rule="evenodd" />
                    <g id="Group_47" data-name="Group 47" transform="translate(24.36 23.064)">
                      <path id="Path_352" data-name="Path 352"
                        d="M488.206,367.052a1.5,1.5,0,0,1,2.258-1.969c.773.829,1.369,2.957.887,3.347C490.836,368.849,488.88,367.877,488.206,367.052Z"
                        transform="translate(-479.219 -344.947)" fill="#c89a37" fill-rule="evenodd" />
                      <path id="Path_353" data-name="Path 353"
                        d="M482.319,375.839a1.5,1.5,0,0,1,2.26-1.966c.77.829,1.367,2.957.886,3.346C484.949,377.639,483,376.665,482.319,375.839Z"
                        transform="translate(-481.967 -340.844)" fill="#c89a37" fill-rule="evenodd" />
                      <path id="Path_354" data-name="Path 354"
                        d="M497.727,362.443a1.5,1.5,0,0,1,2.258-1.969c.774.827,1.367,2.957.889,3.346C500.354,364.239,498.4,363.268,497.727,362.443Z"
                        transform="translate(-474.774 -347.099)" fill="#c89a37" fill-rule="evenodd" />
                      <path id="Path_355" data-name="Path 355"
                        d="M503.615,353.654a1.5,1.5,0,0,1,2.257-1.969c.773.827,1.367,2.956.887,3.346C506.242,355.45,504.288,354.479,503.615,353.654Z"
                        transform="translate(-472.026 -351.202)" fill="#c89a37" fill-rule="evenodd" />
                    </g>
                    <path id="Path_356" data-name="Path 356"
                      d="M497.288,369.716a1.5,1.5,0,0,1,2.26-1.966c.77.826,1.366,2.957.884,3.343C499.918,371.516,497.961,370.542,497.288,369.716Z"
                      transform="translate(-450.619 -320.639)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_357" data-name="Path 357"
                      d="M491.4,378.505a1.5,1.5,0,0,1,2.258-1.969c.773.829,1.367,2.957.889,3.347C494.031,380.3,492.077,379.331,491.4,378.505Z"
                      transform="translate(-453.366 -316.537)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_358" data-name="Path 358"
                      d="M506.809,365.107a1.5,1.5,0,0,1,2.258-1.969c.774.83,1.367,2.956.889,3.346C509.436,366.9,507.482,365.932,506.809,365.107Z"
                      transform="translate(-446.174 -322.791)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_359" data-name="Path 359"
                      d="M499.26,379.76a1.5,1.5,0,0,1,2.258-1.966c.774.829,1.367,2.957.889,3.346C501.888,381.559,499.934,380.588,499.26,379.76Z"
                      transform="translate(-449.698 -315.949)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_360" data-name="Path 360"
                      d="M508.78,375.152a1.5,1.5,0,0,1,2.258-1.966c.773.827,1.367,2.956.887,3.346C511.41,376.95,509.453,375.979,508.78,375.152Z"
                      transform="translate(-445.253 -318.101)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_361" data-name="Path 361"
                      d="M476.286,357.4c-1.939,4.541.637,7.3.393,12.149s-5.146,9.471-5.146,9.471,5.131-.359,10.85-8.452,1.663-17.064.65-18.233S477.458,352.907,476.286,357.4Z"
                      transform="translate(-462.478 -327.773)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_362" data-name="Path 362"
                      d="M471.676,378.666c1.019-.166,5.6-1.292,10.641-8.423,5.074-7.183,2.456-15.053,1.091-17.551a3.553,3.553,0,0,0-1.879,1.1c-2.034,2.48-.192,9.626-1.127,14.809C479.549,373.337,473.768,377.445,471.676,378.666Z"
                      transform="translate(-462.411 -327.443)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_363" data-name="Path 363"
                      d="M487.524,345.751c4.767-1.288,7.139,1.646,11.975,2.076s10.094-3.78,10.094-3.78-1.066,5.031-9.876,9.57-17.13-.717-18.146-1.885S482.905,346.288,487.524,345.751Z"
                      transform="translate(-457.901 -331.479)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_364" data-name="Path 364"
                      d="M487.5,345.461c4.767-1.288,7.139,1.646,11.975,2.076,3.372.3,6.947-1.653,8.8-2.868a25.782,25.782,0,0,1-7.1,5.134,16.321,16.321,0,0,1-11.422,1.342c-3.61-.851-7.8-.051-8.335-.667a2.744,2.744,0,0,1,1.467-2.8A7.741,7.741,0,0,1,487.5,345.461Z"
                      transform="translate(-457.879 -331.189)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_365" data-name="Path 365"
                      d="M477.416,360.083c0,8.437,11.082,11.494,18.1,10.306l8.652-1.461s-7.368-.491-10.391-6.014-1.22-11.9-2.753-14.121C488.011,344.426,477.413,350.007,477.416,360.083Z"
                      transform="translate(-459.732 -329.964)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_366" data-name="Path 366"
                      d="M486.047,354.238c.544,7.745,5.661,12.825,9.73,13.489,5.087.833-8.065,2.252-14.208-2.527-5.26-4.094-3.713-12,1.882-15.763C485.615,347.982,485.952,352.887,486.047,354.238Z"
                      transform="translate(-459.301 -329.087)" fill="#6e9032" fill-rule="evenodd" />
                    <path id="Path_367" data-name="Path 367"
                      d="M479.67,351.887c-6.655,10.523-.147,14.878-3.814,19.11C476.676,365.356,470.241,357.294,479.67,351.887Z"
                      transform="translate(-461.108 -327.819)" fill="#6e9032" fill-rule="evenodd" />
                    <path id="Path_368" data-name="Path 368"
                      d="M482.549,348.761c9.526-4.31,12.388,1.615,16.336-.943C494.1,347.842,488.141,341.55,482.549,348.761Z"
                      transform="translate(-457.335 -330.895)" fill="#6e9032" fill-rule="evenodd" />
                  </g>
                  <g id="apple2" transform="translate(582.548 462.15)">
                    <path id="Path_369" data-name="Path 369"
                      d="M591.987,410.752c-17.645,11.07-43.049,6.215-61.608-16.881-16.529-20.564-21.1-52.958,4.068-66.742l17.9,19.267a52.658,52.658,0,0,0,10.258,19.634,50.964,50.964,0,0,0,22.446,15.565l14.677,15.8C598.525,399.425,592.682,410.316,591.987,410.752Z"
                      transform="translate(-516.775 -324.147)" fill="#ab1117" fill-rule="evenodd" />
                    <path id="Path_370" data-name="Path 370"
                      d="M597.808,398.061c-17.7,19.748-46.922,11.956-63.926-8.216s-19.8-54.328,2.42-64.749l16.448,19.511a52.728,52.728,0,0,0,10.472,20.436,52.017,52.017,0,0,0,18.636,14.1Z"
                      transform="translate(-515.09 -325.096)" fill="#faf198" fill-rule="evenodd" />
                    <path id="Path_371" data-name="Path 371"
                      d="M548.209,353.065c.31.367-.952,1.936-2.052,2.862s-1.621.86-1.93.493-.286-.895.814-1.819S547.9,352.7,548.209,353.065Z"
                      transform="translate(-504.038 -312.075)" fill="#4a1c00" fill-rule="evenodd" />
                    <path id="Path_372" data-name="Path 372"
                      d="M543.941,345.174c-.034.475-2.034.722-3.466.619s-1.762-.516-1.728-.995.418-.839,1.851-.736S543.976,344.7,543.941,345.174Z"
                      transform="translate(-506.518 -316.249)" fill="#4a1c00" fill-rule="evenodd" />
                    <path id="Path_373" data-name="Path 373"
                      d="M554.844,359.247c-.475-.047-1.058,1.882-1.2,3.311s.211,1.826.686,1.872.9-.27,1.04-1.7S555.322,359.3,554.844,359.247Z"
                      transform="translate(-499.575 -309.153)" fill="#4a1c00" fill-rule="evenodd" />
                    <path id="Path_374" data-name="Path 374"
                      d="M526.359,335.312c-5.03,10.8-6.222,26.16,3.6,42.455,13.312,22.075,34.99,27.862,45.523,24.736s7.953-16.238,4.584-20.056-10.572,6.491-23.559-7.839-16.331-24.221-15.619-29.661C541.983,336.589,531.559,324.153,526.359,335.312Z"
                      transform="translate(-514.077 -322.396)" fill="#fbf6c5" fill-rule="evenodd" />
                    <path id="Path_375" data-name="Path 375"
                      d="M519.055,352.821c.183,11.348,11.254,32.74,31.313,43.071s31.152,4.461,31.011,3.217S537.118,405.848,519.055,352.821Z"
                      transform="translate(-515.71 -312.152)" fill="#c21818" fill-rule="evenodd" />
                  </g>
                  <g id="kiwi" transform="translate(647.008 475.108)">
                    <path id="Path_376" data-name="Path 376"
                      d="M606.7,336.459a45.98,45.98,0,1,1-45.982,45.98A45.981,45.981,0,0,1,606.7,336.459Z"
                      transform="translate(-560.719 -332.749)" fill="#748327" fill-rule="evenodd" />
                    <path id="Path_377" data-name="Path 377"
                      d="M606.7,333.93a45.982,45.982,0,1,1-45.982,45.983A45.983,45.983,0,0,1,606.7,333.93Z"
                      transform="translate(-560.719 -333.93)" fill="#b1bd2b" fill-rule="evenodd" />
                    <path id="Path_378" data-name="Path 378"
                      d="M605.505,336.62l.983,26.656,4.32-26.323-2.366,26.57,7.583-25.573-5.675,26.063,10.729-24.421-8.9,25.146,13.706-22.885-11.981,23.834L630.37,344.7,615.5,366.842l18.966-18.757-17.528,20.106L638.1,351.959l-19.911,17.748,23.034-13.451-21.98,15.115,24.538-10.46-23.7,12.239,25.656-7.3-25.048,9.174L647.061,371l-26,5.965,26.664-.693-26.541,2.656,26.541,2.659-26.664-.693,26,5.965-26.369-4.028L645.74,392l-25.656-7.3,23.7,12.242-24.538-10.46,21.98,15.116-23.034-13.451L638.1,405.892l-21.166-16.233,17.528,20.106L615.5,391.008l14.869,22.143-16.462-20.986L625.886,416,612.18,393.114l8.9,25.146L610.35,393.839l5.675,26.062-7.581-25.573,2.364,26.57-4.318-26.323-.985,26.656-.986-26.656L600.2,420.9l2.364-26.57L594.982,419.9l5.676-26.062L589.931,418.26l8.9-25.146L585.124,416,597.1,392.165l-16.465,20.986,14.872-22.143-18.966,18.757,17.531-20.106-21.166,16.233,19.911-17.748-23.034,13.451,21.977-15.116-24.538,10.46,23.7-12.242L565.27,392l25.046-9.174-26.366,4.028,26-5.962-26.667.69,26.541-2.656-26.541-2.659,26.664.693-26-5.965,26.366,4.028-25.046-9.174,25.656,7.3-23.7-12.242,24.538,10.46-21.977-15.115,23.034,13.451-19.911-17.748,21.166,16.233-17.531-20.106,18.966,18.757L580.637,344.7,597.1,365.685l-11.978-23.834,13.7,22.885-8.9-25.146,10.726,24.421-5.676-26.063,7.584,25.573-2.364-26.57,4.318,26.323Z"
                      transform="translate(-559.523 -332.674)" fill="#c1c753" fill-rule="evenodd" />
                    <circle id="Ellipse_6" data-name="Ellipse 6" cx="29.171" cy="29.171" r="29.171"
                      transform="translate(4.728 45.983) rotate(-45)" fill="#748327" />
                    <circle id="Ellipse_7" data-name="Ellipse 7" cx="19.777" cy="19.777" r="19.777"
                      transform="translate(18.014 45.983) rotate(-45)" fill="#d9d69a" />
                    <g id="Group_50" data-name="Group 50" transform="translate(15.7 15.7)">
                      <path id="Path_379" data-name="Path 379"
                        d="M592.643,344.633c.786,0,1.421,1.521,1.421,3.4s-.635,3.4-1.421,3.4-1.42-1.521-1.42-3.4S591.858,344.633,592.643,344.633Z"
                        transform="translate(-562.178 -344.633)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_380" data-name="Path 380"
                        d="M581.982,347.361c.678-.389,1.991.609,2.928,2.235s1.149,3.261.469,3.652-1.992-.607-2.931-2.231S581.3,347.754,581.982,347.361Z"
                        transform="translate(-566.679 -343.399)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_381" data-name="Path 381"
                        d="M574.277,354.973c.393-.682,2.029-.469,3.652.468s2.627,2.252,2.235,2.931-2.029.469-3.657-.468S573.884,355.652,574.277,354.973Z"
                        transform="translate(-570.129 -339.992)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_382" data-name="Path 382"
                        d="M571.422,365.6c0-.785,1.521-1.421,3.4-1.421s3.4.637,3.4,1.421-1.521,1.421-3.4,1.421S571.422,366.388,571.422,365.6Z"
                        transform="translate(-571.422 -335.506)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_383" data-name="Path 383"
                        d="M574.15,376.7c-.393-.679.607-1.992,2.234-2.931s3.261-1.15,3.654-.471-.607,1.995-2.233,2.931S574.543,377.38,574.15,376.7Z"
                        transform="translate(-570.188 -331.436)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_384" data-name="Path 384"
                        d="M581.762,384.992c-.679-.392-.471-2.029.466-3.653s2.252-2.624,2.931-2.231.469,2.027-.466,3.653S582.441,385.385,581.762,384.992Z"
                        transform="translate(-566.781 -328.578)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_385" data-name="Path 385"
                        d="M592.391,388.085c-.785,0-1.42-1.521-1.42-3.4s.635-3.4,1.42-3.4,1.421,1.521,1.421,3.4S593.177,388.085,592.391,388.085Z"
                        transform="translate(-562.295 -327.52)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_386" data-name="Path 386"
                        d="M603.488,385.12c-.679.393-1.99-.607-2.931-2.231s-1.149-3.264-.469-3.655,1.993.607,2.931,2.231S604.167,384.728,603.488,385.12Z"
                        transform="translate(-558.225 -328.519)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_387" data-name="Path 387"
                        d="M611.781,376.918c-.393.679-2.029.471-3.652-.469s-2.624-2.252-2.232-2.931,2.029-.469,3.652.471S612.173,376.237,611.781,376.918Z"
                        transform="translate(-555.367 -331.334)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_388" data-name="Path 388"
                        d="M614.875,365.855c0,.785-1.521,1.421-3.4,1.421s-3.4-.637-3.4-1.421,1.521-1.421,3.4-1.421S614.875,365.071,614.875,365.855Z"
                        transform="translate(-554.31 -335.389)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_389" data-name="Path 389"
                        d="M611.909,355.193c.392.679-.607,1.991-2.233,2.928s-3.262,1.148-3.655.469.607-1.991,2.232-2.931S611.516,354.51,611.909,355.193Z"
                        transform="translate(-555.309 -339.89)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_390" data-name="Path 390"
                        d="M603.707,347.489c.679.392.469,2.027-.469,3.652s-2.249,2.627-2.931,2.234-.471-2.029.469-3.655S603.025,347.1,603.707,347.489Z"
                        transform="translate(-558.123 -343.339)" fill="#4a1c00" fill-rule="evenodd" />
                    </g>
                    <g id="Group_51" data-name="Group 51" transform="translate(19.284 19.284)">
                      <path id="Path_391" data-name="Path 391"
                        d="M587.3,347.152c.691-.192,1.621.986,2.086,2.63s.277,3.138-.411,3.331-1.621-.984-2.083-2.629S586.613,347.347,587.3,347.152Z"
                        transform="translate(-567.902 -347.051)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_392" data-name="Path 392"
                        d="M578.747,352.124c.5-.513,1.9.04,3.12,1.235s1.812,2.579,1.31,3.088-1.894-.04-3.117-1.234S578.25,352.634,578.747,352.124Z"
                        transform="translate(-571.668 -344.809)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_393" data-name="Path 393"
                        d="M573.883,360.744c.174-.694,1.662-.911,3.318-.49s2.856,1.326,2.678,2.02-1.662.911-3.318.49S573.7,361.438,573.883,360.744Z"
                        transform="translate(-573.865 -341.024)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_394" data-name="Path 394"
                        d="M573.941,371c-.192-.687.984-1.621,2.63-2.083s3.136-.28,3.331.411-.986,1.618-2.63,2.083S574.134,371.684,573.941,371Z"
                        transform="translate(-573.839 -337.001)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_395" data-name="Path 395"
                        d="M578.913,380.117c-.513-.5.04-1.894,1.234-3.117s2.579-1.81,3.089-1.313-.041,1.9-1.235,3.12S579.425,380.619,578.913,380.117Z"
                        transform="translate(-571.598 -333.801)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_396" data-name="Path 396"
                        d="M587.533,385.382c-.694-.177-.912-1.665-.49-3.32s1.326-2.857,2.02-2.68.911,1.665.49,3.321S588.226,385.559,587.533,385.382Z"
                        transform="translate(-567.813 -332.002)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_397" data-name="Path 397"
                        d="M597.785,385.313c-.688.192-1.621-.986-2.083-2.63s-.28-3.138.409-3.333,1.619.986,2.083,2.633S598.473,385.118,597.785,385.313Z"
                        transform="translate(-563.79 -332.018)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_398" data-name="Path 398"
                        d="M606.905,379.928c-.5.512-1.894-.041-3.117-1.235s-1.81-2.576-1.311-3.088,1.9.043,3.12,1.234S607.407,379.417,606.905,379.928Z"
                        transform="translate(-560.591 -333.847)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_399" data-name="Path 399"
                        d="M612.171,370.745c-.177.692-1.665.914-3.321.49s-2.856-1.328-2.678-2.02,1.662-.911,3.321-.49S612.348,370.051,612.171,370.745Z"
                        transform="translate(-558.791 -337.069)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_400" data-name="Path 400"
                        d="M612.1,360.512c.2.691-.986,1.622-2.63,2.086s-3.136.279-3.328-.409.983-1.622,2.63-2.083S611.905,359.824,612.1,360.512Z"
                        transform="translate(-558.806 -341.113)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_401" data-name="Path 401"
                        d="M606.718,351.96c.51.5-.043,1.9-1.238,3.12s-2.574,1.81-3.088,1.308.043-1.894,1.238-3.12S606.206,351.461,606.718,351.96Z"
                        transform="translate(-560.635 -344.879)" fill="#4a1c00" fill-rule="evenodd" />
                      <path id="Path_402" data-name="Path 402"
                        d="M597.533,347.094c.694.175.914,1.662.49,3.318s-1.326,2.856-2.02,2.678-.911-1.66-.49-3.317S596.84,346.916,597.533,347.094Z"
                        transform="translate(-563.858 -347.076)" fill="#4a1c00" fill-rule="evenodd" />
                    </g>
                  </g>
                  <g id="blueberry2" transform="translate(572.637 513.991)">
                    <path id="Path_403" data-name="Path 403"
                      d="M530.2,360.438a20.185,20.185,0,1,0,20.187,20.184A20.183,20.183,0,0,0,530.2,360.438Z"
                      transform="translate(-510.018 -360.438)" fill="#323446" fill-rule="evenodd" />
                    <path id="Path_404" data-name="Path 404"
                      d="M529.917,360.438c-24.819,0-22.579,33.838.948,33.838C555.683,394.276,553.444,360.438,529.917,360.438Z"
                      transform="translate(-508.98 -360.438)" fill="#50546e" fill-rule="evenodd" />
                    <path id="Path_405" data-name="Path 405"
                      d="M529.433,367.3c5.206-1.157,4.555-1.763,3.315,3.088,4.558,2.612,4.558,1.756,0,4.37,1.24,4.852,1.891,4.245-3.315,3.088-2.8,4.252-1.885,4.252-4.687,0-5.209,1.157-4.559,1.765-3.315-3.088-4.562-2.614-4.562-1.757,0-4.37-1.244-4.851-1.894-4.245,3.315-3.088C527.548,363.051,526.628,363.051,529.433,367.3Z"
                      transform="translate(-506.287 -358.722)" fill="#323446" fill-rule="evenodd" />
                    <path id="Path_406" data-name="Path 406"
                      d="M525.412,367.459a3.561,3.561,0,1,0,3.811,3.553A3.69,3.69,0,0,0,525.412,367.459Z"
                      transform="translate(-504.611 -357.16)" fill="#50546e" fill-rule="evenodd" />
                    <path id="Path_407" data-name="Path 407"
                      d="M518.89,363.328c-5.677,3.776-6.67,11.471-2.708,8.936.584-.376,1.857-3.047,5.567-4.986,2.7-1.413,8.176-1.927,8.354-3.38C530.575,360,522.636,360.836,518.89,363.328Z"
                      transform="translate(-508.258 -360.076)" fill="#666f86" fill-rule="evenodd" />
                  </g>
                  <g id="leaf2" transform="translate(674.454 459.416)">
                    <g id="Group_54" data-name="Group 54">
                      <path id="Path_408" data-name="Path 408"
                        d="M599.579,430.134c-13.021-10.379,1.57-5.618-5.257-13.406s-19.373-11.8-13.262-19.445,11.892-9.141,16.31-2.026,11.176.868,5.733-5.667-18.7-14.215-2.724-21.871,11.554-1.1,14.56,10.463,15.585,9.73,10.717,4.374c-11.732-12.9.723-20.332,5.266-18.475,4.2,1.718,4.728,7.861,5.175,7.717,6.079-1.936-.883-11.4,11.084-8.414s-.53,15.858,9.595,9.34,10.005-11.053,1.043-16.147-1.93-19.745,12.457-17.982,4.92,21.444,13.841,20.473,6.85-8.734,3.312-16.207-5.939-15.933,2.08-18.625,14.182-.285,16.782,11.17,8.2,4.1,6.378-3.327,10.1-8.6,12.952-2.7-5.089,13.893-.408,13.555,2.35-14.311,10.619-9.841.178,13.632,4.948,16.69a4.369,4.369,0,0,0,.9.447,220.743,220.743,0,0,1-6.643,37.654,20.958,20.958,0,0,1-4.109,3.1c-9.273,5.025-27.8,10.328-42.749,17.406S599.579,430.134,599.579,430.134Z"
                        transform="translate(-579.43 -323.232)" fill="#84a636" fill-rule="evenodd" />
                      <path id="Path_409" data-name="Path 409"
                        d="M596.745,425.29c-13.021-10.379,1.57-5.618-5.257-13.406A42.946,42.946,0,0,0,585.5,406.5c4.317-2.988,4.87-2.309,18.344-1.377,17.313,1.194,7.076-10.484,9.74-16.316s4.949,3.977,18.7,2.447,5.718-15.537,24.742-19.228c15.646-3.033,12.056-9.268,4.109-14.94-.883-1.788-2.954-3.532-6.149-5.35-8.958-5.1-1.93-19.745,12.457-17.982,15.2,1.864,5.668,33.634,21.545,34.731,11.543.8,21.616-3.057,27.146-11.72s13.215-10.157,15.12,1.622c.82,5.062,2.912,5.1,5.756,2.137-1.3,7.99-3.033,15.714-4.8,22.518a20.958,20.958,0,0,1-4.109,3.1c-9.273,5.025-27.8,10.328-42.749,17.406S596.745,425.29,596.745,425.29Z"
                        transform="translate(-576.596 -318.389)" fill="#6e8f31" fill-rule="evenodd" />
                      <path id="Path_410" data-name="Path 410"
                        d="M595.068,425.044c-13.021-10.379,1.57-5.618-5.257-13.406-.232-.266-.472-.53-.719-.785,12.408-1.149,20.693,3.45,28.391-.409,8.65-4.335-7.088-13.051,11.449-14.368s11.474-6.4,19.3-14c7.265-7.048,16.932-10.148,17.434-14.944,1.966-3.051-1.284-6.784-6.211-10.3-.883-1.788-2.954-3.532-6.149-5.35-7.232-4.113-4.046-14.447,5.017-17.356,1.936,2.074,5.383-1.483,10.3,11.154s3.177,32.033,20.272,33.082,26.355-19.729,36.909-12.285c2.344,1.653,5.191,1.933,8.251,1.286-1.066,5.445-2.287,10.663-3.526,15.427a21.049,21.049,0,0,1-4.109,3.1c-9.273,5.025-27.8,10.328-42.749,17.406S595.068,425.044,595.068,425.044Z"
                        transform="translate(-574.919 -318.143)" fill="#607f2d" fill-rule="evenodd" />
                    </g>
                    <path id="Path_411" data-name="Path 411"
                      d="M582.062,375.4c3.2-4.87,8.094-8.907,12.011-2.589,4.346,7.013,7.091,8.363,12.11,1.71l.464-.568c-.389,3.833-4.5,7.509-8.555,5.976C589.167,376.554,595.278,364.97,582.062,375.4Z"
                      transform="translate(-578.201 -301.599)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_412" data-name="Path 412"
                      d="M662.024,324.137c-6.007,1.443-9.592,4.773-8.143,11.285.76,3.409,5.656,10.088,5.81,15.21.1,3.29-.867,5.419-2,8.418,1.81-14.623-.186-8.317-5.174-21.828C650.043,330.509,654.515,323.215,662.024,324.137Z"
                      transform="translate(-545.627 -322.847)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_413" data-name="Path 413"
                      d="M676.338,338.9c6.429,6.435,7.818-4.879,9.568-6.847,3.192-3.592,8.289-.767,7.142,7.235-.613,4.277-1.885,9.009,3.158,10.308l-.015.123a.983.983,0,0,1-.817.109c-7.615-1.486-2.027-13.046-4.767-16.279-2.67-3.154-4.612,1.7-5.276,3.573C683.4,342.554,677.541,343.136,676.338,338.9Z"
                      transform="translate(-534.187 -319.831)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_414" data-name="Path 414"
                      d="M609.482,359.42c-1.694-6.183,9.282-9.859,11.751-1.112,1.382,4.9,4.8-1.672,5.238-3.114,1.034-3.377.673-5.1,6.866-2.8a5.437,5.437,0,0,1,2.834,1.747c-1.744-.629-5.765-1.87-7.482-1.26-.84.295-.8,6.907-4.751,8.9-5.515,2.783-3.048-7.26-9-7.326C611.608,354.427,610.012,356.45,609.482,359.42Z"
                      transform="translate(-565.482 -310.108)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_415" data-name="Path 415"
                      d="M617.47,375.308c-7.945-3.123-10.136-5.659-11.632-14.142-1.119-6.363.794-9.159-9-5.732-4.285,1.5-3.727,1.837-6.764,3.93,2.464-4.864,15.448-9.978,16.772-4.543C609.631,366.254,605.606,367.368,617.47,375.308Z"
                      transform="translate(-574.458 -309.576)" fill="#cad465" fill-rule="evenodd" />
                  </g>
                  <g id="leaf1" transform="translate(452.428 472.832)">
                    <g id="Group_56" data-name="Group 56">
                      <path id="Path_416" data-name="Path 416"
                        d="M554.746,439.28c13.021-10.38-1.568-5.618,5.257-13.4s19.373-11.807,13.265-19.445-11.9-9.143-16.313-2.026-11.177.868-5.734-5.666,18.7-14.217,2.725-21.872-11.554-1.1-14.557,10.463-15.588,9.727-10.721,4.376c11.732-12.9-.722-20.332-5.263-18.477-4.2,1.719-4.729,7.862-5.177,7.719-6.076-1.936.886-11.406-11.084-8.415s.53,15.858-9.595,9.341-10.005-11.054-1.043-16.15,1.933-19.742-12.458-17.981-4.918,21.444-13.84,20.473-6.847-8.732-3.309-16.207,5.936-15.932-2.08-18.625-14.182-.283-16.782,11.17-8.2,4.1-6.381-3.325-10.1-8.6-12.952-2.7c-2.476,5.122,3.183,11.823,1.65,13.279,14.293,30.9,43.894,61.539,57.915,72.629C515.286,431.422,554.746,439.28,554.746,439.28Z"
                        transform="translate(-428.068 -332.379)" fill="#84a636" fill-rule="evenodd" />
                      <path id="Path_417" data-name="Path 417"
                        d="M548.529,434.436c13.021-10.38-1.568-5.618,5.257-13.4a42.766,42.766,0,0,1,5.988-5.386c-4.315-2.988-4.871-2.309-18.342-1.379-17.316,1.2-7.076-10.482-9.744-16.316s-4.945,3.977-18.7,2.447-5.715-15.533-24.742-19.226c-15.643-3.035-12.056-9.269-4.109-14.941.883-1.787,2.954-3.532,6.149-5.351,8.961-5.094,1.933-19.742-12.458-17.981-15.2,1.866-5.666,33.635-21.541,34.729a35.328,35.328,0,0,1-14.906-1.942c14.267,19.656,31.1,36.333,40.667,43.9C509.069,426.578,548.529,434.436,548.529,434.436Z"
                        transform="translate(-421.851 -327.535)" fill="#6e8f31" fill-rule="evenodd" />
                      <path id="Path_418" data-name="Path 418"
                        d="M545.6,434.19c13.021-10.38-1.568-5.618,5.257-13.4.235-.267.475-.528.722-.788-12.408-1.147-20.7,3.451-28.393-.408-8.649-4.335,7.086-13.049-11.447-14.371s-11.477-6.4-19.3-13.992C485.164,384.18,475.5,381.08,475,376.284c-1.966-3.051,1.283-6.784,6.208-10.3.883-1.787,2.954-3.532,6.149-5.351,7.233-4.112,4.047-14.446-5.017-17.353-1.938,2.074-5.383-1.484-10.294,11.153s-3.177,32.033-20.275,33.082a20.354,20.354,0,0,1-4.1-.166c11.786,14.339,23.885,26.01,31.451,32C506.136,426.332,545.6,434.19,545.6,434.19Z"
                        transform="translate(-418.918 -327.289)" fill="#607f2d" fill-rule="evenodd" />
                    </g>
                    <path id="Path_419" data-name="Path 419"
                      d="M533.358,384.548c-3.2-4.87-8.093-8.907-12.009-2.59-4.349,7.013-7.094,8.363-12.113,1.71l-.462-.566c.39,3.83,4.5,7.509,8.553,5.976C526.252,385.7,520.141,374.117,533.358,384.548Z"
                      transform="translate(-390.391 -310.745)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_420" data-name="Path 420"
                      d="M448.812,333.283c6.008,1.445,9.6,4.773,8.143,11.286-.758,3.409-5.655,10.088-5.81,15.21-.1,3.289.868,5.417,2,8.417-1.814-14.623.183-8.32,5.171-21.828C460.793,339.655,456.322,332.361,448.812,333.283Z"
                      transform="translate(-418.384 -331.993)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_421" data-name="Path 421"
                      d="M431.849,345.379a8.466,8.466,0,0,1-1.863,1.47c.114.243.227.485.345.725A3.806,3.806,0,0,0,431.849,345.379Z"
                      transform="translate(-427.173 -326.309)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_422" data-name="Path 422"
                      d="M506.662,368.568c1.693-6.183-9.282-9.859-11.75-1.112-1.383,4.9-4.8-1.674-5.24-3.114-1.031-3.378-.67-5.1-6.865-2.8a5.47,5.47,0,0,0-2.835,1.748c1.744-.631,5.763-1.872,7.485-1.26.836.295.794,6.906,4.747,8.9,5.515,2.781,3.05-7.259,9-7.325C504.537,363.573,506.133,365.6,506.662,368.568Z"
                      transform="translate(-403.836 -319.254)" fill="#cad465" fill-rule="evenodd" />
                    <path id="Path_423" data-name="Path 423"
                      d="M498.844,384.454c7.942-3.123,10.136-5.659,11.628-14.142,1.121-6.362-.794-9.159,9-5.732,4.286,1.5,3.727,1.837,6.765,3.931-2.464-4.866-15.449-9.979-16.769-4.544C506.681,375.4,510.7,376.515,498.844,384.454Z"
                      transform="translate(-395.026 -318.722)" fill="#cad465" fill-rule="evenodd" />
                  </g>
                  <g id="bowl" transform="translate(446.343 479.274)">
                    <path id="Path_424" data-name="Path 424"
                      d="M423.92,338.627c0,100.989,88.1,182.862,196.773,182.862s196.775-81.873,196.775-182.862v-.009c-.063,40.24-88.135,72.856-196.775,72.856s-196.71-32.616-196.77-72.853Z"
                      transform="translate(-423.92 -335.907)" fill="#363c42" fill-rule="evenodd" />
                    <path id="Path_425" data-name="Path 425"
                      d="M423.92,338.626c0,70.915,43.447,132.394,106.949,162.726,69.315,33.1,182.919-7.879,193.766-100.872-30.166,6.965-65.78,10.993-103.942,10.993-108.636,0-196.71-32.616-196.77-72.853Z"
                      transform="translate(-423.92 -335.906)" fill="#3e454a" fill-rule="evenodd" />
                    <path id="Path_426" data-name="Path 426"
                      d="M423.92,338.626c0,66.258,37.929,124.272,94.7,156.35.261.062.516.133.777.2,111.621,27.906,143.268-40.66,145.172-85.524-14.107,1.191-28.794,1.822-43.88,1.822-108.636,0-196.71-32.616-196.77-72.853Z"
                      transform="translate(-423.92 -335.906)" fill="#4c535a" fill-rule="evenodd" />
                    <path id="Path_427" data-name="Path 427"
                      d="M424.067,336.77c-.087.886-.147,1.776-.147,2.67,0,40.259,88.1,72.9,196.773,72.9s196.775-32.638,196.775-72.9c0-.893-.06-1.784-.147-2.67h-6.469a23.869,23.869,0,0,1,.166,2.67c0,36.686-85.208,66.427-190.325,66.427S430.368,376.126,430.368,339.44a23.513,23.513,0,0,1,.167-2.67Z"
                      transform="translate(-423.92 -336.77)" fill="#8a8e94" fill-rule="evenodd" />
                  </g>
                  <g id="mandarin_fall2" transform="translate(727.337 579.649)" opacity="1">
                    <path id="Path_428" data-name="Path 428"
                      d="M688.873,427.689c5.267,9.574,8.8,28.5,1.168,44.628-10.281,21.73-34.436,30.6-54.875,26.248-10.136-2.156-19.937-7.729-24.89-16.081a29.224,29.224,0,0,1-4.094-10.211c-.946-6.2,1.059-13.212,2.652-11.381,10.18,11.726,35.99,9.628,50.332-19.411C667.033,425.549,674.768,404.68,688.873,427.689Z"
                      transform="translate(-605.938 -414.465)" fill="#d57b19" fill-rule="evenodd" />
                    <path id="Path_429" data-name="Path 429"
                      d="M606.672,468.36c1.386-15.145,37.871,2.033,52.151-26.88,6.4-12.952,12.7-29.161,22.418-22.415a34.612,34.612,0,0,1,4.729,6.231c5.006,9.027,8.263,26.923.772,42.265-10.09,20.668-33.46,29.259-53.14,25.3C620.346,490.2,607.737,481.55,606.672,468.36Z"
                      transform="translate(-605.595 -414.464)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_430" data-name="Path 430"
                      d="M684.446,424.81c4.905,8.847,8.1,26.386.757,41.418-9.893,20.259-32.795,28.679-52.079,24.8-14.173-2.847-27.589-12.671-26.395-27.64,1.146-14.391,35.743,1.53,49.527-25.542C663.819,422.993,671.294,403.561,684.446,424.81Z"
                      transform="translate(-605.603 -415.424)" fill="#e9b636" fill-rule="evenodd" />
                    <path id="Path_431" data-name="Path 431"
                      d="M665.521,435.992c-13.489-3.839-7.114-1.124-19.126-8.14h0C659.883,431.691,653.5,428.976,665.521,435.992Z"
                      transform="translate(-587.05 -409.623)" fill="#d57b19" fill-rule="evenodd" />
                    <path id="Path_432" data-name="Path 432"
                      d="M678.8,426.627c4.04,7.166,5.7,23.147-.755,35.555-8.707,16.716-28.294,23.942-44.628,21.054-12-2.12-22.084-5.477-20.846-17.739,1.187-11.789,30.354.722,42.47-21.626C661.692,431.61,667.941,409.441,678.8,426.627Z"
                      transform="translate(-602.887 -413.131)" fill="#efc84b" fill-rule="evenodd" />
                    <path id="Path_433" data-name="Path 433"
                      d="M628.842,445.179a31,31,0,0,0,16.763-12.54,12.074,12.074,0,0,1-2.008,7.7C637.875,449.2,618.649,448.359,628.842,445.179Z"
                      transform="translate(-596.612 -407.388)" fill="#f1d88c" fill-rule="evenodd" />
                    <path id="Path_434" data-name="Path 434"
                      d="M649.786,465.516c1.223-1.455-5.944-13.057-13.382-21.943C640.046,453.781,648.652,466.484,649.786,465.516Z"
                      transform="translate(-591.714 -402.283)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_435" data-name="Path 435"
                      d="M663.36,451.275c.3-1.873-11.817-8.128-22.77-11.915C648.967,446.235,662.885,452.694,663.36,451.275Z"
                      transform="translate(-589.76 -404.25)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_436" data-name="Path 436"
                      d="M665.288,432.863c-.5-1.389-11.094-1.143-19.977.355C653.587,434.784,665.491,434.005,665.288,432.863Z"
                      transform="translate(-587.556 -407.711)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_437" data-name="Path 437"
                      d="M633.833,468.379c-1.656-.289-3.412-12.231-3.435-22.49C633.748,454.879,635.155,468.388,633.833,468.379Z"
                      transform="translate(-594.518 -401.202)" fill="#dc9118" fill-rule="evenodd" />
                    <path id="Path_438" data-name="Path 438"
                      d="M619.506,464.584c-1.022-.814,2.23-9.615,6.037-16.622C624.477,455.342,620.4,465.085,619.506,464.584Z"
                      transform="translate(-599.693 -400.234)" fill="#dc9118" fill-rule="evenodd" />
                  </g>
                  <g id="blueberry_fall3" transform="translate(785.692 624.482)" opacity="1">
                    <path id="Path_439" data-name="Path 439"
                      d="M674.769,443.262a20.185,20.185,0,1,0,20.184,20.187A20.188,20.188,0,0,0,674.769,443.262Z"
                      transform="translate(-654.582 -443.262)" fill="#323446" fill-rule="evenodd" />
                    <path id="Path_440" data-name="Path 440"
                      d="M674.48,443.262c-24.816,0-22.575,33.84.952,33.84C700.248,477.1,698.008,443.262,674.48,443.262Z"
                      transform="translate(-653.543 -443.262)" fill="#50546e" fill-rule="evenodd" />
                    <path id="Path_441" data-name="Path 441"
                      d="M674,450.126c5.206-1.157,4.556-1.765,3.315,3.088,4.557,2.614,4.557,1.757,0,4.37,1.241,4.849,1.891,4.245-3.315,3.088-2.8,4.25-1.885,4.25-4.69,0-5.206,1.157-4.555,1.762-3.312-3.088-4.56-2.612-4.56-1.756,0-4.37-1.242-4.852-1.894-4.245,3.312-3.088C672.113,445.877,671.194,445.877,674,450.126Z"
                      transform="translate(-650.85 -441.545)" fill="#323446" fill-rule="evenodd" />
                    <path id="Path_442" data-name="Path 442"
                      d="M669.98,450.284a3.561,3.561,0,1,0,3.809,3.553A3.69,3.69,0,0,0,669.98,450.284Z"
                      transform="translate(-649.174 -439.984)" fill="#50546e" fill-rule="evenodd" />
                    <path id="Path_443" data-name="Path 443"
                      d="M663.456,446.151c-5.675,3.776-6.67,11.474-2.711,8.939.588-.376,1.86-3.048,5.57-4.989,2.7-1.413,8.176-1.927,8.355-3.38C675.139,442.822,667.2,443.659,663.456,446.151Z"
                      transform="translate(-652.821 -442.899)" fill="#666f86" fill-rule="evenodd" />
                  </g>
                  <g id="apple_fall" transform="translate(382.891 595.696)" opacity="0">
                    <path id="Path_444" data-name="Path 444"
                      d="M474.228,426.887c5.2,20.171-7.127,42.907-34.76,53.592C414.861,490,382.6,484.534,377.1,456.369l23.787-11.219a52.625,52.625,0,0,0,21.82-3.823,50.957,50.957,0,0,0,21.639-16.671l19.5-9.2C465.416,417.226,474.025,426.092,474.228,426.887Z"
                      transform="translate(-375.327 -415.457)" fill="#ab1117" fill-rule="evenodd" />
                    <path id="Path_445" data-name="Path 445"
                      d="M464.071,415.553c13.454,22.857-2.831,48.34-27.212,58.428s-57.772,2.4-60.969-21.934l23.581-9.76a52.687,52.687,0,0,0,22.647-3.785,51.993,51.993,0,0,0,19.087-13.486Z"
                      transform="translate(-375.891 -415.412)" fill="#faf198" fill-rule="evenodd" />
                    <path id="Path_446" data-name="Path 446"
                      d="M407.327,433.993c.44-.183,1.555,1.492,2.1,2.822s.327,1.8-.114,1.988-.94,0-1.49-1.326S406.883,434.177,407.327,433.993Z"
                      transform="translate(-361.304 -406.81)" fill="#4a1c00" fill-rule="evenodd" />
                    <path id="Path_447" data-name="Path 447"
                      d="M398.791,435.881c.444.179.072,2.158-.461,3.493s-1.025,1.521-1.47,1.344-.676-.653-.144-1.988S398.345,435.7,398.791,435.881Z"
                      transform="translate(-366.312 -405.928)" fill="#4a1c00" fill-rule="evenodd" />
                    <path id="Path_448" data-name="Path 448"
                      d="M415.48,428.717c-.189.44,1.473,1.578,2.793,2.146s1.8.352,1.988-.089.018-.937-1.3-1.5S415.669,428.278,415.48,428.717Z"
                      transform="translate(-357.415 -409.351)" fill="#4a1c00" fill-rule="evenodd" />
                    <path id="Path_449" data-name="Path 449"
                      d="M383.334,460.891c8.767,8.068,23.041,13.86,41.552,9.436,25.069-5.992,37.158-24.9,37.37-35.879s-13.061-12.5-17.723-10.45,2.979,12.042-14.611,20.073-28.03,8.22-33,5.9C389.288,446.394,374.276,452.553,383.334,460.891Z"
                      transform="translate(-373.732 -411.833)" fill="#fbf6c5" fill-rule="evenodd" />
                    <path id="Path_450" data-name="Path 450"
                      d="M398.621,474.88c10.869,3.265,34.609-.8,50.535-16.781s13.7-28.337,12.468-28.577S454.629,473.744,398.621,474.88Z"
                      transform="translate(-365.279 -408.891)" fill="#c21818" fill-rule="evenodd" />
                  </g>
                  <g id="strawberry_fall2" transform="translate(432.541 593.965)" opacity="1">
                    <path id="Path_451" data-name="Path 451"
                      d="M452.783,429.482c-1.8,19.062-15.651,25.327-24.587,25.792-5.627.295-8.858-2.014-7.042-2.737,0,0,1.671,1.587,9.337-5.75,5.061-4.838,6.721-9.234,8.828-12.393C441.614,430.949,444.443,428.973,452.783,429.482Z"
                      transform="translate(-420.647 -413.215)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_452" data-name="Path 452"
                      d="M451.192,431.382c-2.834,16.869-15.738,22.534-24.218,22.975a16.775,16.775,0,0,1-3.713-.2c1.42-.664,3.638-2.164,7.031-5.407,5.056-4.841,6.718-9.237,8.823-12.4C441.282,433.113,443.918,431.171,451.192,431.382Z"
                      transform="translate(-419.426 -412.298)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_453" data-name="Path 453"
                      d="M438.037,440.027c18.771,3.776,28.14-5.254,31.162-13.677,1.905-5.3.047-9.376-.587-7.532-2.9,8.467-17.2,7.088-19.7,7.607C444.088,427.422,437.8,432.266,438.037,440.027Z"
                      transform="translate(-412.531 -418.367)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_454" data-name="Path 454"
                      d="M440.586,439.971c16.287,1.936,24.6-6.432,27.42-14.277a12.8,12.8,0,0,0,.751-5.922c-3.352,7.16-16.138,7.088-18.43,7.773C446.041,428.828,440.827,433.373,440.586,439.971Z"
                      transform="translate(-411.338 -417.711)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_455" data-name="Path 455"
                      d="M481.9,432.391c-16.932-20.671-65.087,15.383-50.453,37.446,8.767,13.214,39.316,21.949,49.527,13.989C491.988,475.242,491.361,443.932,481.9,432.391Z"
                      transform="translate(-416.877 -414.702)" fill="#ab1117" fill-rule="evenodd" />
                    <path id="Path_456" data-name="Path 456"
                      d="M478.152,433.27a14.318,14.318,0,0,0-6.9-4.682c-6.1,4.959-11.161,5.963-11.161,5.963A19.5,19.5,0,0,1,458.4,448.3l-3.743,6.809s1.417-7.681-1.938-10.052-9.282-1.32-9.282-1.32-5.008,8.188-10.578,11.4a14.472,14.472,0,0,0,2.3,10.039c7.65,11.5,33.967,19.333,42.665,12.542C487.2,470.4,486.378,443.331,478.152,433.27Z"
                      transform="translate(-415.003 -413.595)" fill="#c21818" fill-rule="evenodd" />
                    <path id="Path_457" data-name="Path 457"
                      d="M444.846,436.566a1.5,1.5,0,0,0-2.406,1.782c.644.934,2.595,1.971,3.079,1.584C446.039,439.517,445.508,437.4,444.846,436.566Z"
                      transform="translate(-410.602 -410.138)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_458" data-name="Path 458"
                      d="M454.692,432.7a1.5,1.5,0,0,0-2.407,1.785c.645.931,2.6,1.969,3.08,1.584C455.884,435.653,455.354,433.536,454.692,432.7Z"
                      transform="translate(-406.005 -411.944)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_459" data-name="Path 459"
                      d="M438.3,444.877a1.5,1.5,0,0,0-2.406,1.785c.644.93,2.595,1.967,3.079,1.584C439.5,447.83,438.965,445.713,438.3,444.877Z"
                      transform="translate(-413.656 -406.259)" fill="#c89a37" fill-rule="evenodd" />
                    <g id="Group_63" data-name="Group 63" transform="translate(21.179 26.01)">
                      <path id="Path_460" data-name="Path 460"
                        d="M454.157,440.539a1.5,1.5,0,0,0-2.4,1.785c.642.93,2.6,1.969,3.077,1.584C455.351,443.493,454.821,441.372,454.157,440.539Z"
                        transform="translate(-427.434 -434.293)" fill="#c89a37" fill-rule="evenodd" />
                      <path id="Path_461" data-name="Path 461"
                        d="M464,436.674a1.5,1.5,0,0,0-2.4,1.782c.641.933,2.595,1.97,3.076,1.584C465.2,439.624,464.668,437.507,464,436.674Z"
                        transform="translate(-422.837 -436.098)" fill="#c89a37" fill-rule="evenodd" />
                      <path id="Path_462" data-name="Path 462"
                        d="M447.616,448.849a1.5,1.5,0,0,0-2.407,1.784c.642.934,2.6,1.971,3.077,1.584C448.807,451.8,448.278,449.685,447.616,448.849Z"
                        transform="translate(-430.488 -430.413)" fill="#c89a37" fill-rule="evenodd" />
                      <path id="Path_463" data-name="Path 463"
                        d="M437.771,452.717a1.5,1.5,0,0,0-2.407,1.784c.643.931,2.6,1.969,3.077,1.586C438.963,455.67,438.432,453.55,437.771,452.717Z"
                        transform="translate(-435.085 -428.608)" fill="#c89a37" fill-rule="evenodd" />
                    </g>
                    <path id="Path_464" data-name="Path 464"
                      d="M454.815,449.982a1.5,1.5,0,0,0-2.407,1.782c.645.934,2.6,1.971,3.077,1.584C456.007,452.933,455.477,450.816,454.815,449.982Z"
                      transform="translate(-405.948 -403.875)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_465" data-name="Path 465"
                      d="M464.661,446.115a1.5,1.5,0,0,0-2.407,1.785c.644.931,2.6,1.969,3.078,1.584C465.853,449.069,465.323,446.951,464.661,446.115Z"
                      transform="translate(-401.351 -405.68)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_466" data-name="Path 466"
                      d="M448.272,458.293a1.5,1.5,0,0,0-2.407,1.785c.645.931,2.6,1.969,3.08,1.584C449.464,461.247,448.934,459.126,448.272,458.293Z"
                      transform="translate(-409.003 -399.995)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_467" data-name="Path 467"
                      d="M464.2,454.06a1.5,1.5,0,0,0-2.4,1.782c.641.934,2.595,1.969,3.077,1.584C465.4,457.011,464.868,454.894,464.2,454.06Z"
                      transform="translate(-401.564 -401.971)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_468" data-name="Path 468"
                      d="M457.661,462.371a1.5,1.5,0,0,0-2.4,1.785c.641.931,2.595,1.969,3.077,1.584C458.855,465.325,458.325,463.207,457.661,462.371Z"
                      transform="translate(-404.619 -398.091)" fill="#c89a37" fill-rule="evenodd" />
                    <path id="Path_469" data-name="Path 469"
                      d="M447.907,425.129c4.851-.923,6.991,2.186,11.782,2.988s10.353-3,10.353-3-1.449,4.933-10.583,8.784-17.023-2.029-17.946-3.271S443.26,425.309,447.907,425.129Z"
                      transform="translate(-410.99 -415.289)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_470" data-name="Path 470"
                      d="M469.73,425.206c-.38.956-2.463,5.191-10.512,8.583-8.1,3.418-15.226-.827-17.375-2.693a3.543,3.543,0,0,1,1.482-1.6c2.859-1.455,9.442,1.875,14.705,2.073C462.835,431.75,468.089,426.985,469.73,425.206Z"
                      transform="translate(-410.75 -415.174)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_471" data-name="Path 471"
                      d="M435.311,434.944c-2.282,4.38.075,7.325-.538,12.141s-5.859,9.051-5.859,9.051,5.146.037,11.465-7.6,2.972-16.882,2.049-18.126S436.825,430.549,435.311,434.944Z"
                      transform="translate(-416.787 -412.948)" fill="#425820" fill-rule="evenodd" />
                    <path id="Path_472" data-name="Path 472"
                      d="M434.938,434.962c-2.282,4.38.075,7.325-.538,12.141-.43,3.361-3.105,6.432-4.687,7.984a25.67,25.67,0,0,0,6.535-5.832,16.318,16.318,0,0,0,3.758-10.869c-.057-3.71,1.622-7.626,1.132-8.283a2.734,2.734,0,0,0-3.045.832A7.758,7.758,0,0,0,434.938,434.962Z"
                      transform="translate(-416.414 -412.967)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_473" data-name="Path 473"
                      d="M450.3,427.831c8.242,1.812,8.853,13.288,6.189,19.892l-3.28,8.14s1.1-7.3-3.651-11.44-11.362-3.742-13.2-5.716C432.736,434.825,440.456,425.667,450.3,427.831Z"
                      transform="translate(-413.738 -414.101)" fill="#587c2e" fill-rule="evenodd" />
                    <path id="Path_474" data-name="Path 474"
                      d="M442.394,435.208c7.45,2.191,11.314,8.276,11.091,12.393-.276,5.149,3.928-7.394.576-14.419-2.874-6.014-10.922-6.2-15.8-1.539C436.376,433.442,441.092,434.826,442.394,435.208Z"
                      transform="translate(-412.628 -413.69)" fill="#6e9032" fill-rule="evenodd" />
                    <path id="Path_475" data-name="Path 475"
                      d="M441.414,428.563c11.7-4.245,14.563,3.048,19.481.37C455.208,428.526,448.715,420.513,441.414,428.563Z"
                      transform="translate(-410.951 -415.275)" fill="#6e9032" fill-rule="evenodd" />
                    <path id="Path_476" data-name="Path 476"
                      d="M437.875,430.95c-6.247,8.383-1.077,12.448-4.423,15.757C434.5,442.036,429.632,434.869,437.875,430.95Z"
                      transform="translate(-414.896 -412.492)" fill="#6e9032" fill-rule="evenodd" />
                  </g>
                </g>
              </svg>


            </div>

            <div class="irj_nekem">

              <a class="irj_nekem" href="#kapcsolat" style="color: rgb(71, 71, 71);">Írj nekem!<br><i
                  class="fas fa-chevron-down" style="font-size: 30px; color: rgb(71, 71, 71);"></i></a>

            </div>

          </div>

        </div>
      </div>

    </section>

    <!-- Tanácsadás oldal end-->

    <section id="magamrol" class="magamrol_section" style="min-height: 100vh;  background-color: #ffdb96">

      <div class="container text-light magamrol_content" style="padding-top: 12vh;">

        <div class="row align-items-center">

          <div class="col-lg-6 order-lg-1">
            <div class=" p-5">

              <h2 class="display-2">Magamról</h2>
              <p>Már több mint 7 éve szerves része az életemnek az egészséges táplálkozás. Eleinte autodidakta módon
                kezdtem el ezzel foglalkozni, sokat kutattam a témában az interneten, szakirodalmat olvastam. Majd egyre
                inkább úgy éreztem, hogy ez már nem csupán egy hobby számomra, hanem megtaláltam a hivatásomat is. </p>
              <p> A következő mérföldkő az Életmód és táplálkozási tanácsadó kurzus sikeres elvégzése volt. A
                tanfolyamon
                elsajátított tudás és saját tapsztalatim által szeretnék segíteni a hozzám fordulóknak egy
                egészségesebb,
                hosszú távon tartható életmód kialakításában.</p>

              <div>
                <!--
                <button class="btn btn-light btn-lg mb-4 mybutton" 
                data-toggle="modal"
                data-target="#keressModal">
                
                  Amiért engem válassz
                </button>
                -->
              </div>


            </div>
          </div>

          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="profile img-fluid" src="img/gyongyi.jpg">
            </div>
          </div>

        </div>

        <div class="irj_nekem">

          <a class="irj_nekem" href="#kapcsolat">Írj nekem!<br><i class="fas fa-chevron-down"
              style="font-size: 30px;"></i></a>

        </div>

      </div>

    </section>

    <section id="blog" style="min-height: 100vh; width: 100%; position: relative; overflow:hidden;" class="portfolio">

      <div class="circle orange"></div>

      <div class="container blog_content">

        <div class="blog">

          <h2 class="display-2" style="padding-top: 20vh;">Blog</h2>


        </div>

        <!-- Portfolio Grid Items-->
        <div class="row">
          <!-- Portfolio Item 1-->
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center">
                <div class="portfolio-item-caption-content text-center">
                  <h2 class=" display-4">
                    A rostok szerepe
                  </h2>
                </div>
              </div>
              <img class="img-fluid" src="img/salad2.jpg" alt="" />
            </div>
          </div>
          <!-- Portfolio Item 2-->
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center">
                <div class="portfolio-item-caption-content text-center">
                  <h2 class=" display-4">
                    A stressz és a hormonok
                  </h2>
                </div>
              </div>
              <img class="img-fluid" src="img/stonesl.jpg" alt="" />
            </div>
          </div>
          <!-- Portfolio Item 3-->
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center">
                <div class="portfolio-item-caption-content text-center">
                  <h2 class=" display-4">
                    Kávéfogyasztás
                  </h2>
                </div>
              </div>
              <img class="img-fluid" src="img/kávé.jpeg" alt="" />
            </div>
          </div>

          <div class="irj_nekem">

            <a class="irj_nekem" href="#kapcsolat">Írj nekem!<br><i class="fas fa-chevron-down"
                style="font-size: 30px;"></i></a>

          </div>


        </div>
      </div>

      </div>
    </section>

    <section id="kapcsolat" style="min-height: 100vh;  background-color: #eb7f53">

      <div class="container text-light kapcsolat_content">

        <h2 class="display-2 text-center" style="padding-top: 15vh;">Kapcsolat</h2>

        <!-- Contact Section Form-->
        <div class="row">


          <div class="col-lg-8 mx-auto">

            <form id="contactForm" name="sentMessage" novalidate="novalidate">

              <div class="control-group">
                <div class="form-group">
                  <label>Neved:</label>
                  <input class="form-control" id="name" type="text" placeholder="Neved" required
                    data-validation-required-message="Please enter your name." />
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group">
                  <label>Email címed:</label>
                  <input class="form-control" id="email" type="email" placeholder="Email címed" required
                    data-validation-required-message="Please enter your email address." />
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group">
                  <label>Telefonszámod:</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Telefonszámod" required
                    data-validation-required-message="Please enter your phone number." />
                  <p class="help-block text-danger"></p>
                </div>
              </div>


              <div class="control-group">
                <div class="form-group">
                  <label>Üzeneted:</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Üzenet" required></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br />
              <div id="return_message"></div>
              <div class="form-group">
                <button class="btn btn-outline-light mb-5" id="sendMessageButton" type="submit"
                  style="font-size: 30px; font-family: 'Great Vibes', cursive; width: 100%;">
                  Küldés
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>



      <script>

        $('#sendMessageButton').click(function () {

          var name = document.getElementById("name").value;
          var email = document.getElementById("email").value;
          var phone = document.getElementById("phone").value;
          var message = document.getElementById("message").value;
          $.ajax({
            type: "POST",
            url: "mail/contact_me.php",
            data: {
              name,
              email,
              phone,
              message,
            },
            success: function () {
              document.getElementById("return_message").innerHTML = "<div class='alert alert-success'>Üzenet elküldve!</div>"
            },
            error: function () {
              document.getElementById("return_message").innerHTML = "<div class='alert alert-danger'>Üzenet küldése sikertelen!</div>"
            }
          })
        });

      </script>

    </section>

    <section id="section5" style="background-color: rgba(0, 0, 0, 0.76); color: white; font-size: 12px; padding: 40px;">
      <div class="container">
        <p style="font-size: 14px;">Az alábbi esetekben nem tudom vállalni a tanácsadást:</p>
        <ul>
          <div class="row">
            <div class="col">
              <li>vesebetegség</li>
              <li>epebetegség</li>
              <li>májbetegség</li>
              <li>cukorbetegség</li>
            </div>
            <div class="col">
              <li>bármelyik belső szerv hiánya</li>
              <li>lelki eredetű evészavar</li>
              <li>bizonyos autoimmun betegségek</li>
              <li>18 éves kor alatt</li>
            </div>
          </div>

        </ul>
        <p>Eltitkolt betegségekért, allergiákért és egyéb, nem említett egészségügyi kondíciókért nem vállalok
          felelősséget. A
          mintaétrend és a tanácsadás javaslatainak be nem tartása miatt bekövetkező esetleges későbbi
          egészségkárosodás,
          eredménytelen alakformálás esetén szintén nem tudok felelősséget vállalni.</p>
        <p>Fennálló betegségek esetén a tanácsadás és az étrend nem helyettesíti az orvosi konzultációt, valamint nem
          írják
          felül az esetleges szükséges orvosi kezeléseket sem!</p>
      </div>
    </section>

    </div>

    <!-- Blog Modals-->

    <!-- Blog Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
      aria-labelledby="portfolioModal1Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

          <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: #141a1467">
            <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
          </button>

          <div class="modal-body">
            <div class="container">

              <div class="row justify-content-center">
                <div class="col-lg-8 m-5">

                  <!-- Blog Modal - Title-->
                  <img class="modal_img" src="img/salad_wide.jpg" style="margin-bottom:30px;">
                  <h2 class="portfolio-modal-title text-secondary mb-5 mt-0  text-center" id="portfolioModal1Label">
                    A rostok szerepe az egészséges táplálkozásban
                  </h2>

                  <!-- Blog Modal - Text-->

                  <p>
                    Ha optimalizálni szeretnénk emésztésünket, a megfelelő rostbevitelre mindenképpen érdemes
                    odafigyelnünk.
                  </p>

                  <p>
                    <strong>A prebiotikumok olyan rostok, melyek táplálékul szolgálnak a jótékony bélbaktériumok
                      számára.</strong> Ezen
                    kívül számos további előnnyel is rendelkeznek, ezek közül néhány:
                  </p>

                  <ul>
                    <li><strong>Növelik a kálcium, magnézium, vas felszívódását,</strong> ezáltal csökkentik a
                      csontritkulás kockázatát
                    </li>
                    <li><strong>Csökkentik az éhségérzetet</strong></li>
                    <li><strong>Csökkentik a vérzsír szintet</strong></li>
                    <li><strong>Elősegítik a bifidobaktériumok (jótékony bélbacik) szaporodását a belekben</strong></li>
                    <li><strong>Csökkentik a toxinok áthaladási idejét</strong></li>
                  </ul>

                  <p>Fontos azonban figyelembe venni, hogy az élelmi rostoknak két fajtája is létezik:</p>

                  <ul>
                    <li><strong>Vízben oldható rostok</strong> (pektin, inulin, rezisztens keményítők, hemicellulózok
                      egy
                      része,
                      nyálkaanyagok)</li>
                    <li><strong>Vízben oldhatatlan rostok</strong> (lignin, cellulóz, hemicellulózok nagy része)</li>
                  </ul>

                  <p>A vízben oldodó rostok változatlan formában haladnak át a vékonybélen, a vastagbélben viszont
                    fermentálódnak. A fermentáció során vajsav keletkezik, amely nagyon hasznos táplálékul szolgál a
                    vastagbél hámsejtjeinek, a kolonocitáknak, ráadásul erős gyulladáscsökkentőként hatnak a belekben.
                    Ezen kívül a vajsav (butirát) a megfelelő mentális egészséghez is nélkülözhetetlen, a bél-agy
                    tengely
                    mentén fejti ki hatását.
                    Ezért érdemes pektinben (pl almarost, áfonya), rezisztens keményítőben (hűtött rizs, zöld banán) és
                    inzulinban (pl cikória, csicsóka) gazdag élelmiszereket fogyasztani.
                  </p>

                  <p>Ezzen szemben <strong>a vízben kevésbé (cellulóz) vagy egyáltalán nem oldható (lignin) rostokhoz a
                      baktériumok csak nehezen férnek hozzá (mivel nem oldódnak vízben), így nem vagy csak kevésbé
                      fermentálódnak</strong>. Cellulóz található pl a búzakorpában, teljes kiőrlésű lisztekben, lignin
                    pedig a fás
                    karalábéban, korpában.</p>

                  <p>A rostok fogyasztása után sokaknál jelentkezhetnek kellemetlen tünetek, pl puffadás, hasmenés,
                    egyéb
                    hasi panaszok.</p>
                  <p style="font-size: 25px; font-weight: bold;">Ezek leginkább a vízben oldhatatlan rostok fogyasztása
                    után fordulnak elő az
                    arra érzékenyeknél.</p>
                  <p>
                    Ezért láthatjuk, hogy nem minden rost egyformán hasznos számunkra. Azoknak, akik érzékenyebb
                    emésztőrendszerrel rendelkeznek, mindenképeppen érdemes kerülniük vagy legalábbis mérsékelniük a
                    vízben nem oldódó rostok bevitelét. Azonban teljesen kizárni nem szabad a magas rosttartalmú
                    ételeket
                    az étrendből, hiszen nélkülözhetetlenek az egészséges bélflóra fenntartásához
                  </p>

                  <p>Azonban fontos még megemlíteni, hogy <strong>a folyadékfogyasztásra mindenképpen érdemes fokozott
                      figyelmet fordítani</strong> a rostok jelentős vízmegkötő tulajdonsága miatt. Ha túl keveset
                    iszunk
                    nagyobb
                    mennyiségű
                    rost bevitele mellett, szorulás, csökkent bélperisztaltika, puffadás, teltségérzet vagy akár hasi
                    fájdalmak is jelentkezhetnek. </p>

                  <!-- Blog Modal - Button-->
                  <!--
                        <div class="text-center">
                          <button class="btn btn-light btn-lg" data-dismiss="modal" style="background-color: #ffdb96;">
                          
                          Bezárás
                          </button>
                        </div>
                        -->

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>
    <!-- Blog Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
      aria-labelledby="portfolioModal1Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

          <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: #141a1467">
            <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
          </button>

          <div class="modal-body">
            <div class="container">

              <div class="row justify-content-center">
                <div class="col-lg-8 m-5">

                  <!-- Blog Modal - Title-->
                  <h2 class="portfolio-modal-title text-secondary mb-5 mt-0  text-center" id="portfolioModal1Label">
                    A stressz és a hormonrendszer kapcsolata
                  </h2>

                  <!-- Blog Modal - Text-->

                  <p>
                    Bizonyára sokszor hallottátok már, hogy a stressz nagyon káros az egészségre. Ennek ellenére sajnos
                    egyre inkább mindennapi életünk része, elkerülni nagyon nehéz. A téma rendkívül hosszú és összetett,
                    ezért ebben a cikkben leginkább <strong>a hormonrendszerre gyakorolt hatására</strong> térek ki
                    röviden.
                  </p>

                  <p>
                    Amikor sok stressz ér minket, <strong>a mellékvese túl sok kortizolt termel</strong>. (Persze tartós
                    stressz hatására
                    előfordulhat mellékvese kifáradás is, ebben az esetben túl kevés a kortizol, ami szintén káros.)
                    <strong>A kortizol felelős az “üss vagy fuss” reakcióért.</strong>
                    Emiatt a szervezet célja ilyenkor az, hogy a lehető
                    leggyorsabban energiához jusson. Ezért a kortizol lezárja a sejtek inzulin receptorait, <strong>a
                      cukor ennek
                      következtében nem tud bejutni a sejtekbe, magas lesz a vércukorszint.</strong> Ez azért fontos,
                    mert
                    így a
                    vérben keringő cukrot azonnali energiaforrásként tudja hasznosítani a szervezet. Ennek következtében
                    <strong>átmeneti inzulinrezisztencia alakul ki</strong>.
                  </p>

                  <p style="font-size: 25px; font-weight: bold;">Ha pedig ez az állapot tartóssá válik, az
                    inzulinrezisztencia is állandósul. </p>

                  <p>Fontos megemlíteni azt is, hogy <strong>a kortizol előanyaga a progeszteron nevű hormon</strong> .
                    Az
                    egészséges
                    hormonrendszerhez elengedhetetlen a megfelelő ösztrogén-progeszteron arány. Ha pedig a progeszteron
                    nagy része kortizol előállítására fordítódik, túl kevés marad belőle, és megborul az ösztrogén-
                    progeszteron egyensúly, ösztogén dominancia alakul ki. Az ösztrogén dominancia egyik következménye
                    lehet, hogy a máj túl sok TBG-t kezd el termelni. A TBG egy pajzsmirigy hormon megkötő fehérje.
                    Tehát
                    a pajzsmirigy hiába termel elég hormont, aktivitást csak a szabadon lévő hormonok tudnak kifejteni,
                    így ha túl sok kötődik meg, pajzsmirigy alulműködéses tünetek jelentkeznek (pl hízás, hajhullás,
                    fáradékonyság).</p>

                  <p>Férfiak esetében különösen fontos megemlíteni, hogy a szervezet a tesztoszteront is progeszteronból
                    állítja elő ( a kortizolhoz hasonlóan). Ezért ha a stressz miatt túl sok kortizolt kell termelnie a
                    szervezetnek, csökken a tesztoszteron szint, <strong>megborul a tesztoszteron és az ösztrogén
                      aránya</strong>. Így
                    férfiaknál is kialakulhat relatív ösztrogén dominancia. Ez ahhoz vezet, hogy egy bizonyos 5 alfa
                    reduktáz enzim aktiválódik, így a tesztoszteron rosszul fog bontódni. A prosztatában pedig egy 40x
                    erősebb hormon, a DHT kezd el termelődni. Ez a “rossz” tesztoszteron felelős pl a fejtetői
                    kopaszodásért is.</p>

                  <p style="font-size: 25px; font-weight: bold;">De mit tehetünk a stressz csökkentésének érdekében?</p>

                  <p>Vannak olyan élelmiszerek, amelyek segíthetnek ebben. Ilyen lehet pl. a magas kakaótartalmú
                    cukormentes étcsoki vagy a banán, amely gazdag triptofán nevű aminosavban. A triptofán pedig a
                    szerotonin hormon előanyaga, mely hozzájárul a nyugalomhoz, jó közérzethet. Azonban itt is nagyon
                    fontos figyelni a mértékletességre, hiszen ezek alapvetően viszonylag magas kalóriatartalmú
                    élelmiszerek! A stressz ellen olyan praktikák is bevethetők, mint pl a rendszeres mozgás, vagy
                    relaxációs gyakorlatok. A legfontosabb, hogy talájuk meg azt a tevékenységet, amely igazi
                    kikapcsolódást, feltöltődést jelent számunkra!</p>


                  <!-- Blog Modal - Button-->
                  <!--
                       <div class="text-center">
                         <button class="btn btn-light btn-lg" data-dismiss="modal" style="background-color: #ffdb96;">
                         
                         Bezárás
                         </button>
                       </div>
                       -->

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- Blog Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
      aria-labelledby="portfolioModal1Label" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

          <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: #141a1467">
            <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
          </button>

          <div class="modal-body">
            <div class="container">

              <div class="row justify-content-center">
                <div class="col-lg-8 m-5">

                  <!-- Blog Modal - Title-->
                  <h2 class="portfolio-modal-title text-secondary mb-5 mt-0  text-center" id="portfolioModal1Label">
                    Kávéfogyasztás
                  </h2>

                  <!-- Blog Modal - Text-->

                  <p>
                    Nagyon sok kérdést kapok azzal kapcsolatban, hogy mi a véleményem a kávéfogyasztásról.
                    Ha nincs semmilyen kizáró körülmény(pl. pajzsmirigy alulműködés), akkor véleményem szerint a
                    mérsékelt
                    kávéfogyasztás teljesen rendben van. A mérséket ebben az esetben kb heti 3-4 kávét jelent,
                    mindennapos, vagy akár napi többszöri fogyasztását kevésbé ajánlom. Pár dologra azonban érdemes
                    figyelni.
                  </p>

                  <p>
                    Először is nem mindegy, hogy mivel isszuk. Legjobb önmagában, feketén fogyasztani, vagy pedig
                    cukormentes növényi tejjel. Ha mindenképpen édesíteni szeretnénk, elsősorban steviát vagy eritritet
                    javasolnék. Határesetként ritkán a méz is beleférhet, ha nem zsírvesztés a cél, hanem izomtömeg
                    építése. A cukrot és a mesterséges édesítőszereket (pl aszpartán, szacharin, de ide tartozik az
                    “édeske” is) mindenképpen kerüljük.
                  </p>

                  <p>Érdemes ügyelnünk az időzítésre is. Nagyon sokan kávé nélkül szinte ki sem tudnak kelni az ágyból,
                    ezért leginkább a reggeli órákban fogyasztják. Azonban normál esetben ilyenkor a legmagasabb a
                    kortizol szintünk, ez kell ahhoz, hogy fel tudjunk ébredni. Ha erre ráisszuk a kávét, azzal még
                    tovább
                    növeljük a kortizol szintet, hiszen a koffein stimulálja a mellékvesét. Ezt kellemesnek érezzük
                    ugyan,
                    de ezzel idővel kifáraszthatjuk a mellélvesénket, így nem termel elegendő kortizolt. Emiatt már nem
                    tudjuk elérni azt a kortizol szintet, amihez hozzászoktattuk a szervezetet. Ilyenkor sokan még több
                    kávéval próbálják orvosolni a problémát, de hosszú távon ez sem fog hatni, és ezzel csak rontanak a
                    helyzeten. </p>

                  <p>Túl későre sem érdemes időzíteni a fogyasztását, ugyanis ebben az esetben egyéni érzékenységtől
                    függően zavarhatja a nyugodt alvást. A koffein az adenozin receptorokhoz kötődik, azokat gátolja,
                    így
                    tehát “kikapcsolja”a fáradtságérzetért felelős receptorokat. Azonban egyénfüggő, hogy ez a gátló
                    hatás
                    kinél meddig tart. Ezért általánosságban érdemes úgy időzíteni, hogy legalább kb 7 óra teljen el a
                    lefekvés és kávézás között.</p>

                  <p>Edzés vagy más fizikai tevékenység előtt viszont hasznos lehet a kávé fogyasztása, hiszen extra
                    energiát ad a mozgáshoz. </p>

                  <p>Tudom hogy sokaknak nem könnyű lemondani a napi többszöri kávéról, de amilyen gyorsan hozzá lehet
                    szokni, pár hét után ugyanolyan egyszerűen át lehet állni a mérsékelt fogyasztásra is. Ráadásul azt
                    vettem észre, hogy mióta csak heti pár kávét iszom, sokkal jobban keresem a minőséget, és mivel így
                    különleges alkalomnak számít egy-egy csésze elfogyasztása ebből a finom italból, jobban élvezem az
                    ízét is.</p>
                  <!-- Blog Modal - Button-->
                  <!--
                        <div class="text-center">
                          <button class="btn btn-light btn-lg" data-dismiss="modal" style="background-color: #ffdb96;">
                          
                          Bezárás
                          </button>
                        </div>
                        -->

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- End of Blog Modals-->

    <!-- Tanácsadás Modal-->

    <div class="portfolio-modal modal fade" id="tanacsadasModal" tabindex="-1" role="dialog"
      aria-labelledby="tanacsadasModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

          <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: #141a1467">
            <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
          </button>

          <div class="modal-body">
            <div class="container">

              <div class="row justify-content-center">
                <div class="col-lg-8 m-5">

                  <!-- Modal - Title-->

                  <img class="modal_img" src="img/salad_wide.jpg" style="margin-bottom:30px;">
                  <h2 class="portfolio-modal-title text-secondary mb-4 mt-0  text-center" id="portfolioModal1Label">
                    Tanácsadás menete
                  </h2>

                  <!-- Modal - Text-->

                  <div class="row">

                    <div id="list_numbers" class="col-sm">
                      <div class="list-group list-group-flush" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list"
                          href="#list-1" role="tab" aria-controls="home">1. Célok</a>
                        <a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list"
                          href="#list-2" role="tab" aria-controls="profile">2. Felmérés</a>
                        <a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list"
                          href="#list-3" role="tab" aria-controls="messages">3. Élelmiszer lista</a>
                        <a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list"
                          href="#list-4" role="tab" aria-controls="settings">4. Arányok és mennyiségek</a>
                        <a class="list-group-item list-group-item-action" id="list-5-list" data-toggle="list"
                          href="#list-5" role="tab" aria-controls="settings">5. Időzítés</a>
                        <a class="list-group-item list-group-item-action" id="list-6-list" data-toggle="list"
                          href="#list-6" role="tab" aria-controls="settings">6. Étrendkiegészítők</a>
                        <a class="list-group-item list-group-item-action" id="list-7-list" data-toggle="list"
                          href="#list-7" role="tab" aria-controls="settings">7. Étrend</a>

                      </div>
                    </div>
                    <div id="list_content" class="col-sm">
                      <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="list-1" role="tabpanel"
                          aria-labelledby="list-1-list">
                          <p>Első lépésben átbeszéljük, hogy mik a céljaid, egészségügyi kihívásaid, melyekre megoldást
                            keresel az új életmód segítségével. Ez a lépés nagyon fontos, mert minél több hasznos
                            információt tudok meg rólad, annál inkább személyre szabott tanácsokat tudok neked adni.</p>
                        </div>

                        <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-list">
                          <p>Anyagcsere típus meghatározása egy részletes kérdőívvel. Ezt követően átbeszéljük a kapott
                            eredményeket, feltárom az ok-okozati összefüggéseket.</p>
                        </div>

                        <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-3-list">
                          <p>A kapott eredmények alapján élemiszerlista összeállítása. Annak átbeszélése, hogy mely
                            élelmiszerek kedvező hatásúak számodra, illetve melyek azok, amelyeket érdemes kerülnöd,
                            valamint csak ritkán fogyasztanod.</p>
                        </div>

                        <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-4-list">
                          <p>Arányok meghatározása (mennyi szénhidrátban, zsírban, illetve fehérjében gazdag élelmiszer
                            fogyasztása ideális számodra egy étkezésen belül).<br>Mennyiség (kalória) meghatározása.</p>
                        </div>

                        <div class="tab-pane fade" id="list-5" role="tabpanel" aria-labelledby="list-5-list">
                          <p>Az sem mindegy, hogy hányszor eszel, hiszen valakinél működik a sokszor keveset elv, míg
                            másnak inkább kevesebbszer nagyobb mennyiséget érdemes fogyasztania. Azt is átbeszéljük,
                            hogy
                            mennyi idő teljen el két étkezés között. Ennek megfelelően illeszkednie kell az étrendnek a
                            napi ritmosodhoz, életviteledhez is.</p>
                        </div>

                        <div class="tab-pane fade" id="list-6" role="tabpanel" aria-labelledby="list-6-list">
                          <p>Amennyiben igényled, egészségügyi kihívásaidnak, igényeidnek megfelelően
                            táplálékkiegészítőket, gyógynövényeket is tudok Neked ajánlani. Ezek azért különösen
                            fontosak,
                            mert segítenek támogatni szervezeted regeneráló és öngyógyító folyamatait. Így céljaidat még
                            könnyebben és gyorsabban elérheted.
                          </p>
                        </div>

                        <div class="tab-pane fade" id="list-7" role="tabpanel" aria-labelledby="list-7-list">
                          <p>A tanácsadást követően 1 héten belül küldök egy 1 hetes táplálkozási ajánlást részletes
                            recept leírással.
                            Fontos, hogy ez inkább csak egyfajta inspiráció, egy minta ahhoz, hogy hogyan variálhatod a
                            számodra optimális alapanyagokat, de nem azt jelenti, hogy egy hétig csak ezt eheted!
                            Ennek az egy hetes mintának az összeállítása során figyelembe veszem az egyéni ízlésedet,
                            preferenciáidat is. Ezen kívül a tanácsadáshoz kapcsolódó egyéb írott anyagokat, pl
                            általános
                            tudnivalókat is egy héten belül küldöm.</p>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- End of Tanácsadás Modal-->

    <!-- Árak Modal-->

    <div class="portfolio-modal modal fade" id="arakModal" tabindex="-1" role="dialog"
      aria-labelledby="tanacsadasModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

          <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: #141a1467">
            <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
          </button>

          <div class="modal-body">
            <div class="container">

              <div class="row justify-content-center">
                <div class="col-lg-8 m-5">

                  <!-- Modal - Title-->

                  <img class="modal_img" src="img/salad_wide.jpg" style="margin-bottom:30px;">
                  <h2 class="portfolio-modal-title text-secondary mb-4 mt-0  text-center" id="portfolioModal1Label">
                    Árak
                  </h2>

                  <!-- Modal - Text-->

                  <div class="row">

                    <div class="col">

                      <div class="my_card">

                        <div class="card">
                          <h5 class="card-header">Táplálkozási tanácsadás</h5>
                          <div class="card-body">
                            <ul>
                              <li>Online konzultáció (kb. másfél óra)</li>
                              <li>Kérdőívek kitöltése, kiértékelése</li>
                              <li>Étrendi ajánlás receptekkel</li>
                              <li>Élelmiszer lista</li>
                              <li>Vitamin, ásványi anyag és táplálék kiegészítő ajánlás</li>
                              <li>Folyamatos kapcsolattartás emailben</li>
                            </ul>

                            <h5 class="card-title text-center">25 000 Ft</h5>
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="col">
                      <div class="my_card">

                        <div class="card">
                          <h5 class="card-header">Kontroll</h5>
                          <div class="card-body">
                            <ul>
                              <li>Felmerülő kérdések megválaszolása</li>
                              <li>Változások nyomon követése</li>
                              <li>Eredmények elemzése</li>
                              <li>Szükség esetén étrend és táplálék kiegészítők finom hangolása</li>
                            </ul>

                            <h5 class="card-title text-center">7000 Ft/óra</h5>
                          </div>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- End of Árak Modal-->

    <!-- Engem keress Modal-->

    <div class="portfolio-modal modal fade" id="keressModal" tabindex="-1" role="dialog"
      aria-labelledby="keressModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

          <button class="close" type="button" data-dismiss="modal" aria-label="Close" style="color: #141a1467">
            <span><i class="fa fa-times" aria-hidden="true" style="width: 20px;"></i></span>
          </button>

          <div class="modal-body">
            <div class="container">

              <div class="row justify-content-center">
                <div class="col-lg-8 m-5">

                  <!-- Blog Modal - Title-->
                  <img class="modal_img" src="img/avocado_wide.jpg" style="margin-bottom:30px;">
                  <h2 class="portfolio-modal-title text-secondary mb-5 mt-0  text-center" id="portfolioModal1Label">
                    Engem keresel, ha:
                  </h2>

                  <!-- Blog Modal - Text-->

                  <ul class="list-group list-group-flush engem_keresel col-sm">
                    <li class="list-group-item">Fogyni szeretnél</li>
                    <li class="list-group-item">Egészségesebb életmódot szeretnél kialakítani</li>
                    <li class="list-group-item">Testösszetételed javítása a célod (nagyobb izomhányad, alacsonyabb
                      testzsírszázalék)</li>
                    <li class="list-group-item">Magasabb energiaszintre, jobb közérzetre vágysz</li>
                    <li class="list-group-item">Emésztési panaszokkal (puffadás, gyomorégés, hasi diszkonfortérzet),
                      bőrproblémákkal, hormonális egyensúlytalansággal küzdesz</li>
                    <li class="list-group-item">Ételallergia vagy intolerancia miatt nehezen tudsz kialakítani egy
                      változatos, egészséges étrendet</li>
                    <li class="list-group-item">Erősebb immunrendszert szeretnél</li>
                  </ul>


                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- End of Engem keress Modal-->


  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollToPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/EaselPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/MotionPathPlugin.min.js"></script>

  <script src="animation.js"></script>

</body>

</html>