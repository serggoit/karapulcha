<?php

/* base.html.twig */
class __TwigTemplate_9a1d297f97fb82e6415600ea56c19cc54dcabfce05fa841b0fad32f53a506e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f644bf3929c2a9dd3cde5c02d442451b48b52503ce9b37be5d8bf729cf1c2d4 = $this->env->getExtension("native_profiler");
        $__internal_2f644bf3929c2a9dd3cde5c02d442451b48b52503ce9b37be5d8bf729cf1c2d4->enter($__internal_2f644bf3929c2a9dd3cde5c02d442451b48b52503ce9b37be5d8bf729cf1c2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "\t\t
    </body>
</html>
";
        
        $__internal_2f644bf3929c2a9dd3cde5c02d442451b48b52503ce9b37be5d8bf729cf1c2d4->leave($__internal_2f644bf3929c2a9dd3cde5c02d442451b48b52503ce9b37be5d8bf729cf1c2d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_02eb9f30564fa9e22660a65e70ee3c684911e702da864b1be2721021c77b5228 = $this->env->getExtension("native_profiler");
        $__internal_02eb9f30564fa9e22660a65e70ee3c684911e702da864b1be2721021c77b5228->enter($__internal_02eb9f30564fa9e22660a65e70ee3c684911e702da864b1be2721021c77b5228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Программа анализа цен ТО";
        
        $__internal_02eb9f30564fa9e22660a65e70ee3c684911e702da864b1be2721021c77b5228->leave($__internal_02eb9f30564fa9e22660a65e70ee3c684911e702da864b1be2721021c77b5228_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c78062a1388f333814d15a1d76b6457dd0a02fcf8ec20e48c4f98c7ada07d839 = $this->env->getExtension("native_profiler");
        $__internal_c78062a1388f333814d15a1d76b6457dd0a02fcf8ec20e48c4f98c7ada07d839->enter($__internal_c78062a1388f333814d15a1d76b6457dd0a02fcf8ec20e48c4f98c7ada07d839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t  <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/jquery-ui.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_c78062a1388f333814d15a1d76b6457dd0a02fcf8ec20e48c4f98c7ada07d839->leave($__internal_c78062a1388f333814d15a1d76b6457dd0a02fcf8ec20e48c4f98c7ada07d839_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9c8fc247a5eede8ac52ecd592690e30c1c2cc04f825a45e92e8018f62b3a505 = $this->env->getExtension("native_profiler");
        $__internal_b9c8fc247a5eede8ac52ecd592690e30c1c2cc04f825a45e92e8018f62b3a505->enter($__internal_b9c8fc247a5eede8ac52ecd592690e30c1c2cc04f825a45e92e8018f62b3a505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "\t\t    <button type=\"button\" class=\"btn btn-primary btn-block\" >Просмотр цен</button>\t\t
\t\t\t<button type=\"button\" class=\"btn btn-primary btn-block\" >Спарсить цены</button>
\t    ";
        
        $__internal_b9c8fc247a5eede8ac52ecd592690e30c1c2cc04f825a45e92e8018f62b3a505->leave($__internal_b9c8fc247a5eede8ac52ecd592690e30c1c2cc04f825a45e92e8018f62b3a505_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f24760496b0c707c764ef01f1bda3a07509c3d0a11b69043bc07cbe27f649eca = $this->env->getExtension("native_profiler");
        $__internal_f24760496b0c707c764ef01f1bda3a07509c3d0a11b69043bc07cbe27f649eca->enter($__internal_f24760496b0c707c764ef01f1bda3a07509c3d0a11b69043bc07cbe27f649eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t  <script type=\"text/javascript\">
\t\t   \$(function() {
            \$.datepicker.setDefaults(
             \$.extend(\$.datepicker.regional[\"ru\"])
            );
            \$( \".datepicker\" ).datepicker();
           });
\t\t  </script>
\t\t";
        
        $__internal_f24760496b0c707c764ef01f1bda3a07509c3d0a11b69043bc07cbe27f649eca->leave($__internal_f24760496b0c707c764ef01f1bda3a07509c3d0a11b69043bc07cbe27f649eca_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 19,  113 => 18,  107 => 17,  98 => 14,  92 => 13,  83 => 8,  78 => 7,  72 => 6,  60 => 5,  50 => 29,  47 => 17,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Программа анализа цен ТО{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*           <link href="{{ asset('/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/* 		  <link href="{{ asset('/css/jquery-ui.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/* 		    <button type="button" class="btn btn-primary btn-block" >Просмотр цен</button>		*/
/* 			<button type="button" class="btn btn-primary btn-block" >Спарсить цены</button>*/
/* 	    {% endblock %}*/
/*         {% block javascripts %}*/
/* 		  <script src="{{ asset('/js/jquery-1.10.2.js') }}" type="text/javascript"></script>*/
/* 		  <script src="{{ asset('/js/jquery-1.10.2.js') }}" type="text/javascript"></script>*/
/* 		  <script type="text/javascript">*/
/* 		   $(function() {*/
/*             $.datepicker.setDefaults(*/
/*              $.extend($.datepicker.regional["ru"])*/
/*             );*/
/*             $( ".datepicker" ).datepicker();*/
/*            });*/
/* 		  </script>*/
/* 		{% endblock %}*/
/* 		*/
/*     </body>*/
/* </html>*/
/* */
