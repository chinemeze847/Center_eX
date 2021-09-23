<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html */
class __TwigTemplate_e772fb9463c3a4aaf0f749870955f6e975fd9c9dfe6219b6d6d70ebf17defd6b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>

    <meta charset=\"UTF-8\" />
    <title>CE-sPESS FUTO Center of Excellence</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link rel=\"shortcut icon\" type=\"image/jpg\" href=\"resources/images/logo.jpg\"/>

    <script src=\"resources/js/bootstrap.min.js\" type=\"application/javascript\" defer></script>
    <script src=\"resources/js/jquery3.js\" type=\"application/javascript\" defer></script>
    <script src=\"resources/js/app.js\" type=\"application/javascript\" defer></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/style.css?cfff\" />

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap\" /> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\" />
    
  </head>

  <body>

    <header class=\"bg-main py-3 px-2\">
      <div class=\"container\">
        <div class=\"d-flex align-items-center\">
          <div>
            <img src=\"resources/images/logo.jpg\" alt=\"Website logo\" width=\"60\" height=\"60\" />
          </div>
          <h1 class=\"mb-0 flex-fill\">
            <a href=\"\" class=\"text-white text-decoration-none fw-bold mx-2 d-none d-sm-inline-block\">
              <span class=\"d-block\">CE-sPESS</span>
              <span class=\"d-block fs-5\">FUTO</span>
            </a>
          </h1>
          <nav>
            <a href=\"#\" id=\"open-nav-drawer-button\" class=\"py-2 px-3 border border-white border-2 bg-transparent text-white rounded d-lg-none\">
              <i class=\"fas fa-bars\"></i>
            </a>
            <div id=\"nav-drawer\" class=\"nav-drawer h-100 w-100 top-0 end-0 end-100\">
              <ul class=\"bg-main h-100 w-75 list-unstyled pb-3 d-lg-flex pb-lg-0\">
                <li class=\"mb-3 text-end d-lg-none\">
                  <button id=\"close-nav-drawer-button\" class=\"border border-0 bg-transparent text-white rounded fs-1 px-2\">
                    <i class=\"fas fa-times\"></i>
                  </button>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <div class=\"position-relative\">
                    <a id=\"open-programmes-button\" href=\"#\" class=\"text-white d-flex p-2 border border-white rounded align-items-center\">
                      <span class=\"flex-fill\">Programmes</span>
                      <span>
                        <i class=\"fas fa-angle-down\"></i>
                      </span>
                    </a>
                    <ul id=\"nav-drawer-programmes\" class=\"nav-drawer-programmes bg-main-varient h-0 mt-lg-2\">
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">Procurement Standards</a>
                      </li>
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">Environmental Standards</a>
                      </li>
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">Social Standards</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <a href=\"\" class=\"text-white d-block p-2 border border-white rounded\">About us</a>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <a href=\"sign-up.html\" class=\"text-white d-block p-2 border border-white rounded\">Sign up</a>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <a href=\"\" class=\"text-white d-block p-2 border bg-sub-main rounded\">I'm teaching</a>
                </li>  
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <a href=\"\" class=\"text-white d-block p-2 border bg-sub-main rounded\">I'm learning</a>
                </li>
              </ul>
            </div>
          </nav> 
        </div>
      </div>
    </header>

    <main>
      
      <section class=\"bg-main-grad\">
        <div class=\"container\">
          <div class=\"row py-5 align-items-center\">
            <div class=\"col-md-8\">
              <h2 class=\"fw-bold fs-1 text-white mb-4\">Centre of Excellence in <br /> Sustainable Procurement, Environment and Social Standards.</h2>
              <a href=\"\" class=\"d-inline-block bg-white text-sub-main px-4 py-3 rounded fw-bold\">Enroll now</a>
            </div>
            <div class=\"d-none d-md-block col-md-4\">
              <img src=\"resources/images/learning-animate.svg\" alt=\"\" widtkh=\"200\" height=\"300\" class=\"d-block w-100\" />
            </div>
          </div>
        </div>
      </section>


      <section>
        <div class=\"container\">
          <div class=\"py-5\">
            <h3 class=\"fw-bold\">Programmes</h3>
            <ul class=\"list-unstyled row justify-content-center align-items-stretch\">
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100 position-relative\">
                  <img src=\"resources/images/programmes/procurement.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded\" />
                  <div class=\"w-100 p-2 fw-bold fs-4 position-absolute bottom-0 text-white bg-blur rounded-bottom\">Procurement Management</div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100 position-relative\">
                  <img src=\"resources/images/programmes/environmental.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded\" />
                  <div class=\"w-100 p-2 fw-bold fs-4 position-absolute bottom-0 text-white bg-blur rounded-bottom\">Environmental Standards</div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100 position-relative\">
                  <img src=\"resources/images/programmes/social.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded\" />
                  <div class=\"w-100 p-2 fw-bold fs-4 position-absolute bottom-0 text-white bg-blur rounded-bottom\">Social Standards</div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class=\"bg-main-gradx\">
        <div class=\"container\">
          <div class=\"py-5\">
            <h3 class=\"fw-bold\">Learning tracks</h3>
            <ul class=\"list-unstyled row justify-content-center\">
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/a.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track A</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>1 - 3 weeks</span>
                  </div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/b.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track B</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>9 months</span>
                  </div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/c.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track C</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>12 months</span>
                  </div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/d.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track D</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>18 months</span>
                  </div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/e.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track E</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>4 years</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section>
        <div class=\"container\">
          <div class=\"py-5\">
            <h3 class=\"fw-bold\">Our team</h3>
            <ul class=\"list-unstyled row justify-content-center align-items-stretch\">
              <li class=\"col-md-6 col-xl-3 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100\">
                  <img src=\"resources/images/team/director.jpeg\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fw-bold text-body fs-5\">Director CEs-PESS FUTO</div>
                  <div class=\"p-2 text-secondary\">Professor Gloria Chukwudebe</div>
                </a>
              </li>
              <li class=\"col-md-6 col-xl-3 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100\">
                  <img src=\"resources/images/team/procurement.jpg\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fw-bold text-body fs-5\">Deputy Director of Procurement Management</div>
                  <div class=\"p-2 text-secondary\">Prof. (Mrs) B.U. Dike</div>
                </a>
              </li>
              <li class=\"col-md-6 col-xl-3 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100\">
                  <img src=\"resources/images/team/environmental.jpg\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fw-bold text-body fs-5\">Deputy Director of Environmental Standards</div>
                  <div class=\"p-2 text-secondary\">Prof Chris Nwoko</div>
                </a>
              </li>
              <li class=\"col-md-6 col-xl-3 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100\">
                  <img src=\"resources/images/team/social.jpg\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fw-bold text-body fs-5\">Deputy Director of Social Standards</div>
                  <div class=\"p-2 text-secondary\">Prof Gloria N. Okwu</div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section>
        <div class=\"container\">
          <div class=\"py-0\">
            <h3 class=\"fw-bold\">Our partners</h3>
            <ul class=\"list-unstyled d-flex flex-wrap align-items-stretch\">
              <li class=\"\">
                <img src=\"resources/images/partners/futo.jpg\" alt=\"\" width=\"100\" height=\"100\" class=\"d-block rounded bg-white me-2 mb-2\" />
              </li>
              <li class=\"\">
                <img src=\"resources/images/partners/nuc.png\" alt=\"\" width=\"100\" height=\"100\" class=\"d-block rounded bg-white me-2 mb-2\" />
              </li>
              <li class=\"\">
                <img src=\"resources/images/partners/wbg.jpg\" alt=\"\" width=\"100\" height=\"100\" class=\"d-block rounded bg-white me-2 mb-2\" />
              </li>
            </ul>
          </div>
        </div>
      </section>
      
    </main>

    <footer class=\"position-absolute bottom-0 left-0 bg-main-varient w-100 text-white py-4\">
      <div class=\"container\">
        <div>

          <div>
            <div class=\"fs-3 fw-bold\">CE-sPESS</div>
            <div>Centre of Excellence in Sustainable Procurement, Environment and Social Standards.</div>
          </div>

          <div class=\"row my-4\">

            <div class=\"col-lg-3\">
              <h6>Join us</h6>
              <ul>
                <li>
                  <a href=\"\">Sign up</a>
                </li>
                <li>
                  <a href=\"\">Sign in</a>
                </li>
              </ul>
            </div>

            <div class=\"col-lg-3\">
              <h6>Our programmes</h6>
              <ul>
                <li>
                  <a href=\"\">Procurement management</a>
                </li>
                <li>
                  <a href=\"\">Environmental standards</a>
                </li>
                <li>
                  <a href=\"\">Social standards</a>
                </li>
              </ul>
            </div>
            
            <div class=\"col-lg-3\">
              <h6>Contact us</h6>
              <ul>
                <li>
                  <a href=\"\">Phone: 08037714993</a>
                </li>
                <li>
                  <a href=\"\">Email: cespess@futo.edu.org</a>
                </li>
              </ul>
            </div>

            <div class=\"col-lg-3\">
              <h6>Code of conduct</h6>
              <ul>
                <li>
                  <a href=\"\">Terms</a>
                </li>
                <li>
                  <a href=\"\">Privacy policy</a>
                </li>
              </ul>
            </div>

          </div>

          <div class=\"small\">Copyright 2021 &copy; All rights reserved.</div>
        </div>
      </div>
    </footer>
        
  </body>
</html>



";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>

    <meta charset=\"UTF-8\" />
    <title>CE-sPESS FUTO Center of Excellence</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link rel=\"shortcut icon\" type=\"image/jpg\" href=\"resources/images/logo.jpg\"/>

    <script src=\"resources/js/bootstrap.min.js\" type=\"application/javascript\" defer></script>
    <script src=\"resources/js/jquery3.js\" type=\"application/javascript\" defer></script>
    <script src=\"resources/js/app.js\" type=\"application/javascript\" defer></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/style.css?cfff\" />

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap\" /> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\" />
    
  </head>

  <body>

    <header class=\"bg-main py-3 px-2\">
      <div class=\"container\">
        <div class=\"d-flex align-items-center\">
          <div>
            <img src=\"resources/images/logo.jpg\" alt=\"Website logo\" width=\"60\" height=\"60\" />
          </div>
          <h1 class=\"mb-0 flex-fill\">
            <a href=\"\" class=\"text-white text-decoration-none fw-bold mx-2 d-none d-sm-inline-block\">
              <span class=\"d-block\">CE-sPESS</span>
              <span class=\"d-block fs-5\">FUTO</span>
            </a>
          </h1>
          <nav>
            <a href=\"#\" id=\"open-nav-drawer-button\" class=\"py-2 px-3 border border-white border-2 bg-transparent text-white rounded d-lg-none\">
              <i class=\"fas fa-bars\"></i>
            </a>
            <div id=\"nav-drawer\" class=\"nav-drawer h-100 w-100 top-0 end-0 end-100\">
              <ul class=\"bg-main h-100 w-75 list-unstyled pb-3 d-lg-flex pb-lg-0\">
                <li class=\"mb-3 text-end d-lg-none\">
                  <button id=\"close-nav-drawer-button\" class=\"border border-0 bg-transparent text-white rounded fs-1 px-2\">
                    <i class=\"fas fa-times\"></i>
                  </button>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <div class=\"position-relative\">
                    <a id=\"open-programmes-button\" href=\"#\" class=\"text-white d-flex p-2 border border-white rounded align-items-center\">
                      <span class=\"flex-fill\">Programmes</span>
                      <span>
                        <i class=\"fas fa-angle-down\"></i>
                      </span>
                    </a>
                    <ul id=\"nav-drawer-programmes\" class=\"nav-drawer-programmes bg-main-varient h-0 mt-lg-2\">
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">Procurement Standards</a>
                      </li>
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">Environmental Standards</a>
                      </li>
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">Social Standards</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <a href=\"\" class=\"text-white d-block p-2 border border-white rounded\">About us</a>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <a href=\"sign-up.html\" class=\"text-white d-block p-2 border border-white rounded\">Sign up</a>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <a href=\"\" class=\"text-white d-block p-2 border bg-sub-main rounded\">I'm teaching</a>
                </li>  
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <a href=\"\" class=\"text-white d-block p-2 border bg-sub-main rounded\">I'm learning</a>
                </li>
              </ul>
            </div>
          </nav> 
        </div>
      </div>
    </header>

    <main>
      
      <section class=\"bg-main-grad\">
        <div class=\"container\">
          <div class=\"row py-5 align-items-center\">
            <div class=\"col-md-8\">
              <h2 class=\"fw-bold fs-1 text-white mb-4\">Centre of Excellence in <br /> Sustainable Procurement, Environment and Social Standards.</h2>
              <a href=\"\" class=\"d-inline-block bg-white text-sub-main px-4 py-3 rounded fw-bold\">Enroll now</a>
            </div>
            <div class=\"d-none d-md-block col-md-4\">
              <img src=\"resources/images/learning-animate.svg\" alt=\"\" widtkh=\"200\" height=\"300\" class=\"d-block w-100\" />
            </div>
          </div>
        </div>
      </section>


      <section>
        <div class=\"container\">
          <div class=\"py-5\">
            <h3 class=\"fw-bold\">Programmes</h3>
            <ul class=\"list-unstyled row justify-content-center align-items-stretch\">
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100 position-relative\">
                  <img src=\"resources/images/programmes/procurement.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded\" />
                  <div class=\"w-100 p-2 fw-bold fs-4 position-absolute bottom-0 text-white bg-blur rounded-bottom\">Procurement Management</div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100 position-relative\">
                  <img src=\"resources/images/programmes/environmental.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded\" />
                  <div class=\"w-100 p-2 fw-bold fs-4 position-absolute bottom-0 text-white bg-blur rounded-bottom\">Environmental Standards</div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100 position-relative\">
                  <img src=\"resources/images/programmes/social.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded\" />
                  <div class=\"w-100 p-2 fw-bold fs-4 position-absolute bottom-0 text-white bg-blur rounded-bottom\">Social Standards</div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class=\"bg-main-gradx\">
        <div class=\"container\">
          <div class=\"py-5\">
            <h3 class=\"fw-bold\">Learning tracks</h3>
            <ul class=\"list-unstyled row justify-content-center\">
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/a.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track A</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>1 - 3 weeks</span>
                  </div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/b.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track B</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>9 months</span>
                  </div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/c.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track C</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>12 months</span>
                  </div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/d.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track D</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>18 months</span>
                  </div>
                </a>
              </li>
              <li class=\"col-md-4 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded bg-white\">
                  <img src=\"resources/images/tracks/e.jpg\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fs-2 text-body\">Track E</div>
                  <div class=\"p-2 text-secondary\">
                    <i class=\"far fa-clock\"></i>
                    <span>4 years</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section>
        <div class=\"container\">
          <div class=\"py-5\">
            <h3 class=\"fw-bold\">Our team</h3>
            <ul class=\"list-unstyled row justify-content-center align-items-stretch\">
              <li class=\"col-md-6 col-xl-3 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100\">
                  <img src=\"resources/images/team/director.jpeg\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fw-bold text-body fs-5\">Director CEs-PESS FUTO</div>
                  <div class=\"p-2 text-secondary\">Professor Gloria Chukwudebe</div>
                </a>
              </li>
              <li class=\"col-md-6 col-xl-3 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100\">
                  <img src=\"resources/images/team/procurement.jpg\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fw-bold text-body fs-5\">Deputy Director of Procurement Management</div>
                  <div class=\"p-2 text-secondary\">Prof. (Mrs) B.U. Dike</div>
                </a>
              </li>
              <li class=\"col-md-6 col-xl-3 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100\">
                  <img src=\"resources/images/team/environmental.jpg\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fw-bold text-body fs-5\">Deputy Director of Environmental Standards</div>
                  <div class=\"p-2 text-secondary\">Prof Chris Nwoko</div>
                </a>
              </li>
              <li class=\"col-md-6 col-xl-3 my-4\">
                <a href=\"\" class=\"d-block shadow-sm rounded h-100\">
                  <img src=\"resources/images/team/social.jpg\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
                  <div class=\"p-2 pb-0 fw-bold text-body fs-5\">Deputy Director of Social Standards</div>
                  <div class=\"p-2 text-secondary\">Prof Gloria N. Okwu</div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section>
        <div class=\"container\">
          <div class=\"py-0\">
            <h3 class=\"fw-bold\">Our partners</h3>
            <ul class=\"list-unstyled d-flex flex-wrap align-items-stretch\">
              <li class=\"\">
                <img src=\"resources/images/partners/futo.jpg\" alt=\"\" width=\"100\" height=\"100\" class=\"d-block rounded bg-white me-2 mb-2\" />
              </li>
              <li class=\"\">
                <img src=\"resources/images/partners/nuc.png\" alt=\"\" width=\"100\" height=\"100\" class=\"d-block rounded bg-white me-2 mb-2\" />
              </li>
              <li class=\"\">
                <img src=\"resources/images/partners/wbg.jpg\" alt=\"\" width=\"100\" height=\"100\" class=\"d-block rounded bg-white me-2 mb-2\" />
              </li>
            </ul>
          </div>
        </div>
      </section>
      
    </main>

    <footer class=\"position-absolute bottom-0 left-0 bg-main-varient w-100 text-white py-4\">
      <div class=\"container\">
        <div>

          <div>
            <div class=\"fs-3 fw-bold\">CE-sPESS</div>
            <div>Centre of Excellence in Sustainable Procurement, Environment and Social Standards.</div>
          </div>

          <div class=\"row my-4\">

            <div class=\"col-lg-3\">
              <h6>Join us</h6>
              <ul>
                <li>
                  <a href=\"\">Sign up</a>
                </li>
                <li>
                  <a href=\"\">Sign in</a>
                </li>
              </ul>
            </div>

            <div class=\"col-lg-3\">
              <h6>Our programmes</h6>
              <ul>
                <li>
                  <a href=\"\">Procurement management</a>
                </li>
                <li>
                  <a href=\"\">Environmental standards</a>
                </li>
                <li>
                  <a href=\"\">Social standards</a>
                </li>
              </ul>
            </div>
            
            <div class=\"col-lg-3\">
              <h6>Contact us</h6>
              <ul>
                <li>
                  <a href=\"\">Phone: 08037714993</a>
                </li>
                <li>
                  <a href=\"\">Email: cespess@futo.edu.org</a>
                </li>
              </ul>
            </div>

            <div class=\"col-lg-3\">
              <h6>Code of conduct</h6>
              <ul>
                <li>
                  <a href=\"\">Terms</a>
                </li>
                <li>
                  <a href=\"\">Privacy policy</a>
                </li>
              </ul>
            </div>

          </div>

          <div class=\"small\">Copyright 2021 &copy; All rights reserved.</div>
        </div>
      </div>
    </footer>
        
  </body>
</html>



", "index.html", "C:\\Users\\Jasper\\Documents\\PHPProjects\\Center_eX\\src\\View\\index.html");
    }
}
