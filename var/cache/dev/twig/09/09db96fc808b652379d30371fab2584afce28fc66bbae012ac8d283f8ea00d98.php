<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_52c432c68a1784b956f4d55926d2f563c9e598302fe2d1b3e738d48e1c5a4cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_8a405f8485bb3ad316435c84313861b5f3df269639e1b9aa07dfa852301e3660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a405f8485bb3ad316435c84313861b5f3df269639e1b9aa07dfa852301e3660->enter($__internal_8a405f8485bb3ad316435c84313861b5f3df269639e1b9aa07dfa852301e3660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_9307c67f6e16382979d2b70a01d9ec8063207366cf7a0ed6554114b8b1712f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9307c67f6e16382979d2b70a01d9ec8063207366cf7a0ed6554114b8b1712f66->enter($__internal_9307c67f6e16382979d2b70a01d9ec8063207366cf7a0ed6554114b8b1712f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a405f8485bb3ad316435c84313861b5f3df269639e1b9aa07dfa852301e3660->leave($__internal_8a405f8485bb3ad316435c84313861b5f3df269639e1b9aa07dfa852301e3660_prof);

        
        $__internal_9307c67f6e16382979d2b70a01d9ec8063207366cf7a0ed6554114b8b1712f66->leave($__internal_9307c67f6e16382979d2b70a01d9ec8063207366cf7a0ed6554114b8b1712f66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00aebd34e67ac4b84739d3e9847fcf93ac1266bd0122c370d128e69f04542b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00aebd34e67ac4b84739d3e9847fcf93ac1266bd0122c370d128e69f04542b89->enter($__internal_00aebd34e67ac4b84739d3e9847fcf93ac1266bd0122c370d128e69f04542b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_df86e0e640f029ce9d37faec91f84ef21c6079dec06bd083cf0554921b41555a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df86e0e640f029ce9d37faec91f84ef21c6079dec06bd083cf0554921b41555a->enter($__internal_df86e0e640f029ce9d37faec91f84ef21c6079dec06bd083cf0554921b41555a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_df86e0e640f029ce9d37faec91f84ef21c6079dec06bd083cf0554921b41555a->leave($__internal_df86e0e640f029ce9d37faec91f84ef21c6079dec06bd083cf0554921b41555a_prof);

        
        $__internal_00aebd34e67ac4b84739d3e9847fcf93ac1266bd0122c370d128e69f04542b89->leave($__internal_00aebd34e67ac4b84739d3e9847fcf93ac1266bd0122c370d128e69f04542b89_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dea8599fc36441f05bdec6bd49bd24aa5a3cdfedbddb3248cb1fdd52d7c07b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dea8599fc36441f05bdec6bd49bd24aa5a3cdfedbddb3248cb1fdd52d7c07b2->enter($__internal_3dea8599fc36441f05bdec6bd49bd24aa5a3cdfedbddb3248cb1fdd52d7c07b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd8b0a083e7d90c011f5724156f87f1b5ae8ba901bfba81c193b411f0c9531f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8b0a083e7d90c011f5724156f87f1b5ae8ba901bfba81c193b411f0c9531f6->enter($__internal_cd8b0a083e7d90c011f5724156f87f1b5ae8ba901bfba81c193b411f0c9531f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_cd8b0a083e7d90c011f5724156f87f1b5ae8ba901bfba81c193b411f0c9531f6->leave($__internal_cd8b0a083e7d90c011f5724156f87f1b5ae8ba901bfba81c193b411f0c9531f6_prof);

        
        $__internal_3dea8599fc36441f05bdec6bd49bd24aa5a3cdfedbddb3248cb1fdd52d7c07b2->leave($__internal_3dea8599fc36441f05bdec6bd49bd24aa5a3cdfedbddb3248cb1fdd52d7c07b2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eb19be8dcc091ce033609eb52231794edd157ea4d33130b7506ae0824fcb542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb19be8dcc091ce033609eb52231794edd157ea4d33130b7506ae0824fcb542->enter($__internal_8eb19be8dcc091ce033609eb52231794edd157ea4d33130b7506ae0824fcb542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a2fcf8fc13f61645f6f56ffa8c4fa9136d8a1a313444e2d0eb0ed4bb75cd70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2fcf8fc13f61645f6f56ffa8c4fa9136d8a1a313444e2d0eb0ed4bb75cd70e->enter($__internal_1a2fcf8fc13f61645f6f56ffa8c4fa9136d8a1a313444e2d0eb0ed4bb75cd70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1a2fcf8fc13f61645f6f56ffa8c4fa9136d8a1a313444e2d0eb0ed4bb75cd70e->leave($__internal_1a2fcf8fc13f61645f6f56ffa8c4fa9136d8a1a313444e2d0eb0ed4bb75cd70e_prof);

        
        $__internal_8eb19be8dcc091ce033609eb52231794edd157ea4d33130b7506ae0824fcb542->leave($__internal_8eb19be8dcc091ce033609eb52231794edd157ea4d33130b7506ae0824fcb542_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
