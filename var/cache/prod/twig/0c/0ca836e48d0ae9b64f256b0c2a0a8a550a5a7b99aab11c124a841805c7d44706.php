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
        $__internal_ab5c1587001382631995c28f097497a987edec42f5dd21ec14911997433653d0 = $this->env->getExtension("native_profiler");
        $__internal_ab5c1587001382631995c28f097497a987edec42f5dd21ec14911997433653d0->enter($__internal_ab5c1587001382631995c28f097497a987edec42f5dd21ec14911997433653d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ab5c1587001382631995c28f097497a987edec42f5dd21ec14911997433653d0->leave($__internal_ab5c1587001382631995c28f097497a987edec42f5dd21ec14911997433653d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ba7559aa647dcc72cee231a67283220008610f4737a04cc9504dea3d17a4035 = $this->env->getExtension("native_profiler");
        $__internal_2ba7559aa647dcc72cee231a67283220008610f4737a04cc9504dea3d17a4035->enter($__internal_2ba7559aa647dcc72cee231a67283220008610f4737a04cc9504dea3d17a4035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2ba7559aa647dcc72cee231a67283220008610f4737a04cc9504dea3d17a4035->leave($__internal_2ba7559aa647dcc72cee231a67283220008610f4737a04cc9504dea3d17a4035_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15182c3309eb7a8a782ec4946583575fd20e6c5e162a600b84df09bfb1a58593 = $this->env->getExtension("native_profiler");
        $__internal_15182c3309eb7a8a782ec4946583575fd20e6c5e162a600b84df09bfb1a58593->enter($__internal_15182c3309eb7a8a782ec4946583575fd20e6c5e162a600b84df09bfb1a58593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_15182c3309eb7a8a782ec4946583575fd20e6c5e162a600b84df09bfb1a58593->leave($__internal_15182c3309eb7a8a782ec4946583575fd20e6c5e162a600b84df09bfb1a58593_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50c36b518399d8c4ab62c6951fa9d1a46b45ce6b7f9ecb5b34f1c4ab196746a7 = $this->env->getExtension("native_profiler");
        $__internal_50c36b518399d8c4ab62c6951fa9d1a46b45ce6b7f9ecb5b34f1c4ab196746a7->enter($__internal_50c36b518399d8c4ab62c6951fa9d1a46b45ce6b7f9ecb5b34f1c4ab196746a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50c36b518399d8c4ab62c6951fa9d1a46b45ce6b7f9ecb5b34f1c4ab196746a7->leave($__internal_50c36b518399d8c4ab62c6951fa9d1a46b45ce6b7f9ecb5b34f1c4ab196746a7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96e422629aa5ea4b719bfab3a78bb51b188e96052e1b09063b026d7529ae5836 = $this->env->getExtension("native_profiler");
        $__internal_96e422629aa5ea4b719bfab3a78bb51b188e96052e1b09063b026d7529ae5836->enter($__internal_96e422629aa5ea4b719bfab3a78bb51b188e96052e1b09063b026d7529ae5836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_96e422629aa5ea4b719bfab3a78bb51b188e96052e1b09063b026d7529ae5836->leave($__internal_96e422629aa5ea4b719bfab3a78bb51b188e96052e1b09063b026d7529ae5836_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
