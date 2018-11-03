<?php

/* adrian/registro.html.twig */
class __TwigTemplate_ae1c010429727663cfe53b8100b3919591e096c75722acf5a5695e55422c55fa extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adrian/registro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "adrian/registro.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
<style>
html,body{
  height:100%;
  width:100%;
  background: linear-gradient(135deg, rgba(0,185,247,1) 0%, rgba(0,185,247,1) 1%, rgba(185,233,250,1) 100%);
}
.ovalo {
\tbackground: #ff9900;
\tborder: 2px solid #888888;
\tborder-radius: 50%;
  margin-left: 400px;
  margin-top: 50px;
  height: 200px;
  width: 400px;

}
.titulo{
  font-size: 40px;
  margin-left: 108px;
  margin-top: 60px;
}
</style>
<head>
    <meta charset=\"utf-8\">
    <title></title>
  </head>
  <body>

<div class=\"ovalo\">
  <div class=\"titulo\"> REGISTRO </div>
</div>

<form style=\"margin:40px\">
  <div class=\"form-group row\">
    <label for=\"inputNombre\" class=\"col-sm-2 col-form-label\">Nombre</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"inputNombre\" placeholder=\"Nombre\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputApellidos\" class=\"col-sm-2 col-form-label\">Apellidos</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"inputApellidos\" placeholder=\"Apellidos\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputUsuario\" class=\"col-sm-2 col-form-label\">Usuario</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputUsuario\" placeholder=\"Usuario\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Email</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Password</label>
    <div class=\"col-sm-10\">
      <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputFecha\" class=\"col-sm-2 col-form-label\">Fecha nacimiento</label>
    <div class=\"col-sm-10\">
      <input type=\"datetime\" class=\"form-control\" id=\"inputFecha\" placeholder=\"Fecha nacimiento\">
    </div>
  </div>
  <fieldset class=\"form-group\">
    <div class=\"row\">
      <legend class=\"col-form-label col-sm-2 pt-0\">Sexo:</legend>
      <div class=\"col-sm-10\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"gridRadios\" id=\"gridRadios1\" value=\"option1\" checked>
          <label class=\"form-check-label\" for=\"gridRadios1\">
            Mujer
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"gridRadios\" id=\"gridRadios2\" value=\"option2\">
          <label class=\"form-check-label\" for=\"gridRadios2\">
            Hombre
          </label>
        </div>

      </div>
    </div>
  </fieldset>

  <div class=\"form-group row\">
    <div class=\"col-sm-10\">
      <button type=\"submit\" class=\"btn btn-success\">Registrar</button>
      <button type=\"submit\" class=\"btn btn-danger\">Cancelar</button>
    </div>
  </div>
</form>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "adrian/registro.html.twig";
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
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
<style>
html,body{
  height:100%;
  width:100%;
  background: linear-gradient(135deg, rgba(0,185,247,1) 0%, rgba(0,185,247,1) 1%, rgba(185,233,250,1) 100%);
}
.ovalo {
\tbackground: #ff9900;
\tborder: 2px solid #888888;
\tborder-radius: 50%;
  margin-left: 400px;
  margin-top: 50px;
  height: 200px;
  width: 400px;

}
.titulo{
  font-size: 40px;
  margin-left: 108px;
  margin-top: 60px;
}
</style>
<head>
    <meta charset=\"utf-8\">
    <title></title>
  </head>
  <body>

<div class=\"ovalo\">
  <div class=\"titulo\"> REGISTRO </div>
</div>

<form style=\"margin:40px\">
  <div class=\"form-group row\">
    <label for=\"inputNombre\" class=\"col-sm-2 col-form-label\">Nombre</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"inputNombre\" placeholder=\"Nombre\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputApellidos\" class=\"col-sm-2 col-form-label\">Apellidos</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" id=\"inputApellidos\" placeholder=\"Apellidos\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputUsuario\" class=\"col-sm-2 col-form-label\">Usuario</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputUsuario\" placeholder=\"Usuario\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputEmail\" class=\"col-sm-2 col-form-label\">Email</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Password</label>
    <div class=\"col-sm-10\">
      <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\">
    </div>
  </div>
  <div class=\"form-group row\">
    <label for=\"inputFecha\" class=\"col-sm-2 col-form-label\">Fecha nacimiento</label>
    <div class=\"col-sm-10\">
      <input type=\"datetime\" class=\"form-control\" id=\"inputFecha\" placeholder=\"Fecha nacimiento\">
    </div>
  </div>
  <fieldset class=\"form-group\">
    <div class=\"row\">
      <legend class=\"col-form-label col-sm-2 pt-0\">Sexo:</legend>
      <div class=\"col-sm-10\">
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"gridRadios\" id=\"gridRadios1\" value=\"option1\" checked>
          <label class=\"form-check-label\" for=\"gridRadios1\">
            Mujer
          </label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"gridRadios\" id=\"gridRadios2\" value=\"option2\">
          <label class=\"form-check-label\" for=\"gridRadios2\">
            Hombre
          </label>
        </div>

      </div>
    </div>
  </fieldset>

  <div class=\"form-group row\">
    <div class=\"col-sm-10\">
      <button type=\"submit\" class=\"btn btn-success\">Registrar</button>
      <button type=\"submit\" class=\"btn btn-danger\">Cancelar</button>
    </div>
  </div>
</form>
  </body>
</html>
", "adrian/registro.html.twig", "/Users/adri9ps/Desktop/2ºDAW/Servidor/GitHub/AdrianPovedaDAW/Proyecto_adrian/app/Resources/views/adrian/registro.html.twig");
    }
}
