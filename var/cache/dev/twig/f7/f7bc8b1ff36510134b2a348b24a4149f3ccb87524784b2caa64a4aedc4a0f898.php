<?php

/* base.html.twig */
class __TwigTemplate_fe28244d799ea4ec016330ff9874381aa63819c6fdb5821292b8eaf97cd9d7c7 extends Twig_Template
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
        $__internal_e2102d9f579067a934acdab120ea0322f41ac348ddee542589a92425927f4e36 = $this->env->getExtension("native_profiler");
        $__internal_e2102d9f579067a934acdab120ea0322f41ac348ddee542589a92425927f4e36->enter($__internal_e2102d9f579067a934acdab120ea0322f41ac348ddee542589a92425927f4e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_e2102d9f579067a934acdab120ea0322f41ac348ddee542589a92425927f4e36->leave($__internal_e2102d9f579067a934acdab120ea0322f41ac348ddee542589a92425927f4e36_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63dda8f6c837523b92c01acda2d88a13d43b053ba35eb69eff4d8071dbbfc836 = $this->env->getExtension("native_profiler");
        $__internal_63dda8f6c837523b92c01acda2d88a13d43b053ba35eb69eff4d8071dbbfc836->enter($__internal_63dda8f6c837523b92c01acda2d88a13d43b053ba35eb69eff4d8071dbbfc836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_63dda8f6c837523b92c01acda2d88a13d43b053ba35eb69eff4d8071dbbfc836->leave($__internal_63dda8f6c837523b92c01acda2d88a13d43b053ba35eb69eff4d8071dbbfc836_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae451b38a8b5dbded558500502da76819dc44858b6f2315b0415bf37e484fe2c = $this->env->getExtension("native_profiler");
        $__internal_ae451b38a8b5dbded558500502da76819dc44858b6f2315b0415bf37e484fe2c->enter($__internal_ae451b38a8b5dbded558500502da76819dc44858b6f2315b0415bf37e484fe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_ae451b38a8b5dbded558500502da76819dc44858b6f2315b0415bf37e484fe2c->leave($__internal_ae451b38a8b5dbded558500502da76819dc44858b6f2315b0415bf37e484fe2c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd242841f51af4bbcd63195ce5ccf8a4967784f324cafc62d631db1352e18bab = $this->env->getExtension("native_profiler");
        $__internal_bd242841f51af4bbcd63195ce5ccf8a4967784f324cafc62d631db1352e18bab->enter($__internal_bd242841f51af4bbcd63195ce5ccf8a4967784f324cafc62d631db1352e18bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd242841f51af4bbcd63195ce5ccf8a4967784f324cafc62d631db1352e18bab->leave($__internal_bd242841f51af4bbcd63195ce5ccf8a4967784f324cafc62d631db1352e18bab_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eac60685d997f10081c604d6c23dff53b487657adc019b1b019fe02d84aa73eb = $this->env->getExtension("native_profiler");
        $__internal_eac60685d997f10081c604d6c23dff53b487657adc019b1b019fe02d84aa73eb->enter($__internal_eac60685d997f10081c604d6c23dff53b487657adc019b1b019fe02d84aa73eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eac60685d997f10081c604d6c23dff53b487657adc019b1b019fe02d84aa73eb->leave($__internal_eac60685d997f10081c604d6c23dff53b487657adc019b1b019fe02d84aa73eb_prof);

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
        return array (  98 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*           <link href="{{ asset('/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
