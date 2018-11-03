<?php

/* adrian/login.html.twig */
class __TwigTemplate_4757be74a6fe05abd81be12785c2333fd79f36ec4ed6ea0fcd1ca4744f35c8f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adrian/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adrian/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<style>
body
{
  background: linear-gradient(135deg, rgba(0,185,247,1) 0%, rgba(0,185,247,1) 1%, rgba(185,233,250,1) 100%);
    background-size: cover;
    padding: 0;
    margin: 0;
}

.wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 99;
}

p.form-title
{
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    text-align: center;
    color: #FFFFFF;
    margin-top: 5%;
    text-transform: uppercase;
    letter-spacing: 4px;
    padding: 40px;
}

form
{
    width: 400px;
    margin: 0 auto;
}

form.login input[type=\"text\"], form.login input[type=\"password\"]
{
    width: 100%;
    margin: 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #FFFFFF;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #FFFFFF;
    outline: 0;
}

form.login input[type=\"submit\"]
{
    width: 100%;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 16px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
}
form.login input[type=\"button\"]
{
    width: 300%;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 16px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
    color:white;
}

form.login input[type=\"submit\"]:hover
{
    transition: background-color 0.5s ease;
}


form.login label, form.login a
{
    font-size: 12px;
    font-weight: 400;
    color: #FFFFFF;
}

form.login a
{
    transition: color 0.5s ease;
}



.pr-wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
    display: none;
}


.posted-by
{
    position: absolute;
    bottom: 26px;
    margin: 0 auto;
    color: #FFF;
    background-color: rgba(0, 0, 0, 0.66);
    padding: 10px;
    left: 45%;
}

</style>
  <head>
    <meta charset=\"utf-8\">
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
</head>
  <body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"wrap\">
                    <p class=\"form-title\">
                        YOU VALUE </p>
                    <form class=\"login\">
                    <input type=\"text\" placeholder=\"Username\" />
                    <input type=\"password\" placeholder=\"Password\" />
                    <input type=\"submit\" value=\"Sign In\" class=\"btn btn-success btn-sm\" />
                    <input type=\"submit\" value=\"Registrarse\" class=\"btn btn-primary btn-sm\" />
                    <div class=\"register_enter\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <input type=\"button\" value=\"Entrar sin registrarse\" class=\"btn btn-link btn-sm\" />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"posted-by\">By: Adrián Poveda </a></div>
    </div>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "adrian/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<style>
body
{
  background: linear-gradient(135deg, rgba(0,185,247,1) 0%, rgba(0,185,247,1) 1%, rgba(185,233,250,1) 100%);
    background-size: cover;
    padding: 0;
    margin: 0;
}

.wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 99;
}

p.form-title
{
    font-family: 'Open Sans' , sans-serif;
    font-size: 40px;
    font-weight: 600;
    text-align: center;
    color: #FFFFFF;
    margin-top: 5%;
    text-transform: uppercase;
    letter-spacing: 4px;
    padding: 40px;
}

form
{
    width: 400px;
    margin: 0 auto;
}

form.login input[type=\"text\"], form.login input[type=\"password\"]
{
    width: 100%;
    margin: 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #FFFFFF;
    outline: 0;
    font-style: italic;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    color: #FFFFFF;
    outline: 0;
}

form.login input[type=\"submit\"]
{
    width: 100%;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 16px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
}
form.login input[type=\"button\"]
{
    width: 300%;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    margin-top: 16px;
    outline: 0;
    cursor: pointer;
    letter-spacing: 1px;
    color:white;
}

form.login input[type=\"submit\"]:hover
{
    transition: background-color 0.5s ease;
}


form.login label, form.login a
{
    font-size: 12px;
    font-weight: 400;
    color: #FFFFFF;
}

form.login a
{
    transition: color 0.5s ease;
}



.pr-wrap
{
    width: 100%;
    height: 100%;
    min-height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
    display: none;
}


.posted-by
{
    position: absolute;
    bottom: 26px;
    margin: 0 auto;
    color: #FFF;
    background-color: rgba(0, 0, 0, 0.66);
    padding: 10px;
    left: 45%;
}

</style>
  <head>
    <meta charset=\"utf-8\">
    <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
</head>
  <body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"wrap\">
                    <p class=\"form-title\">
                        YOU VALUE </p>
                    <form class=\"login\">
                    <input type=\"text\" placeholder=\"Username\" />
                    <input type=\"password\" placeholder=\"Password\" />
                    <input type=\"submit\" value=\"Sign In\" class=\"btn btn-success btn-sm\" />
                    <input type=\"submit\" value=\"Registrarse\" class=\"btn btn-primary btn-sm\" />
                    <div class=\"register_enter\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <input type=\"button\" value=\"Entrar sin registrarse\" class=\"btn btn-link btn-sm\" />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"posted-by\">By: Adrián Poveda </a></div>
    </div>
  </body>
</html>
", "adrian/login.html.twig", "/Users/adri9ps/Desktop/2ºDAW/Servidor/GitHub/AdrianPovedaDAW/Proyecto_adrian/app/Resources/views/adrian/login.html.twig");
    }
}
