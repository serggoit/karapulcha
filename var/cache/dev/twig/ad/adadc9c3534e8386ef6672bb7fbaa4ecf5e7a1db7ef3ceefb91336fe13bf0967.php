<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4bdc385903babcc378066a053b817d052c0aeecb02bf980b5dba0ee414be68c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_484b4709764c4b5f946f526a83b5c178efba384a169112ad60bb9c8619e6436b = $this->env->getExtension("native_profiler");
        $__internal_484b4709764c4b5f946f526a83b5c178efba384a169112ad60bb9c8619e6436b->enter($__internal_484b4709764c4b5f946f526a83b5c178efba384a169112ad60bb9c8619e6436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_484b4709764c4b5f946f526a83b5c178efba384a169112ad60bb9c8619e6436b->leave($__internal_484b4709764c4b5f946f526a83b5c178efba384a169112ad60bb9c8619e6436b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a9d80f12aa7d3266de101aa2cbc177a1da829198b0fca984b35431e351f5bb2 = $this->env->getExtension("native_profiler");
        $__internal_7a9d80f12aa7d3266de101aa2cbc177a1da829198b0fca984b35431e351f5bb2->enter($__internal_7a9d80f12aa7d3266de101aa2cbc177a1da829198b0fca984b35431e351f5bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7a9d80f12aa7d3266de101aa2cbc177a1da829198b0fca984b35431e351f5bb2->leave($__internal_7a9d80f12aa7d3266de101aa2cbc177a1da829198b0fca984b35431e351f5bb2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_393874111dc340ae121f195f21aa410625d5bcc3d29adc9758e82b92e24ab811 = $this->env->getExtension("native_profiler");
        $__internal_393874111dc340ae121f195f21aa410625d5bcc3d29adc9758e82b92e24ab811->enter($__internal_393874111dc340ae121f195f21aa410625d5bcc3d29adc9758e82b92e24ab811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_393874111dc340ae121f195f21aa410625d5bcc3d29adc9758e82b92e24ab811->leave($__internal_393874111dc340ae121f195f21aa410625d5bcc3d29adc9758e82b92e24ab811_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6be4cef19b63d7a6f4c3d4e5e72c7942a4e75a0be0ae35caecbb993ca35d428d = $this->env->getExtension("native_profiler");
        $__internal_6be4cef19b63d7a6f4c3d4e5e72c7942a4e75a0be0ae35caecbb993ca35d428d->enter($__internal_6be4cef19b63d7a6f4c3d4e5e72c7942a4e75a0be0ae35caecbb993ca35d428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6be4cef19b63d7a6f4c3d4e5e72c7942a4e75a0be0ae35caecbb993ca35d428d->leave($__internal_6be4cef19b63d7a6f4c3d4e5e72c7942a4e75a0be0ae35caecbb993ca35d428d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
