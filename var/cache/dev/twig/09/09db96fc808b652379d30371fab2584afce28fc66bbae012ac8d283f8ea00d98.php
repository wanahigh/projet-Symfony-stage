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
        $__internal_0ae6f4a213ee3542ff3894f8469453ae53f4ba74a0aa371bd9f302bc96808f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae6f4a213ee3542ff3894f8469453ae53f4ba74a0aa371bd9f302bc96808f48->enter($__internal_0ae6f4a213ee3542ff3894f8469453ae53f4ba74a0aa371bd9f302bc96808f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d5dd4f588c41a4408b335ae46c476bfea2857c4cbd6c95c616ae744dd12b0314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5dd4f588c41a4408b335ae46c476bfea2857c4cbd6c95c616ae744dd12b0314->enter($__internal_d5dd4f588c41a4408b335ae46c476bfea2857c4cbd6c95c616ae744dd12b0314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ae6f4a213ee3542ff3894f8469453ae53f4ba74a0aa371bd9f302bc96808f48->leave($__internal_0ae6f4a213ee3542ff3894f8469453ae53f4ba74a0aa371bd9f302bc96808f48_prof);

        
        $__internal_d5dd4f588c41a4408b335ae46c476bfea2857c4cbd6c95c616ae744dd12b0314->leave($__internal_d5dd4f588c41a4408b335ae46c476bfea2857c4cbd6c95c616ae744dd12b0314_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1df6cda237e309b9ab9112ff6e0fe042a753cd3a626de8c1a435ee17e702e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1df6cda237e309b9ab9112ff6e0fe042a753cd3a626de8c1a435ee17e702e39->enter($__internal_a1df6cda237e309b9ab9112ff6e0fe042a753cd3a626de8c1a435ee17e702e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30c7cc024fff99fb778fed16ffe0ab456be8e1ca2a8bb7d3403ddd3b6e17fd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c7cc024fff99fb778fed16ffe0ab456be8e1ca2a8bb7d3403ddd3b6e17fd83->enter($__internal_30c7cc024fff99fb778fed16ffe0ab456be8e1ca2a8bb7d3403ddd3b6e17fd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_30c7cc024fff99fb778fed16ffe0ab456be8e1ca2a8bb7d3403ddd3b6e17fd83->leave($__internal_30c7cc024fff99fb778fed16ffe0ab456be8e1ca2a8bb7d3403ddd3b6e17fd83_prof);

        
        $__internal_a1df6cda237e309b9ab9112ff6e0fe042a753cd3a626de8c1a435ee17e702e39->leave($__internal_a1df6cda237e309b9ab9112ff6e0fe042a753cd3a626de8c1a435ee17e702e39_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2231db00489f93534f4f9c8db6863eb66c1c8dbeb3b6414fc3d4c1a2c88829ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2231db00489f93534f4f9c8db6863eb66c1c8dbeb3b6414fc3d4c1a2c88829ff->enter($__internal_2231db00489f93534f4f9c8db6863eb66c1c8dbeb3b6414fc3d4c1a2c88829ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b4af054b7acbf55cfa791c9c7d254738b86d12358995d753c598fcd4ff9965b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4af054b7acbf55cfa791c9c7d254738b86d12358995d753c598fcd4ff9965b->enter($__internal_4b4af054b7acbf55cfa791c9c7d254738b86d12358995d753c598fcd4ff9965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_4b4af054b7acbf55cfa791c9c7d254738b86d12358995d753c598fcd4ff9965b->leave($__internal_4b4af054b7acbf55cfa791c9c7d254738b86d12358995d753c598fcd4ff9965b_prof);

        
        $__internal_2231db00489f93534f4f9c8db6863eb66c1c8dbeb3b6414fc3d4c1a2c88829ff->leave($__internal_2231db00489f93534f4f9c8db6863eb66c1c8dbeb3b6414fc3d4c1a2c88829ff_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e86a60d1afa83d077aafe1816dd9997f3e56e103cfdff111c63e6f12c1d1225d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86a60d1afa83d077aafe1816dd9997f3e56e103cfdff111c63e6f12c1d1225d->enter($__internal_e86a60d1afa83d077aafe1816dd9997f3e56e103cfdff111c63e6f12c1d1225d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e34d32f102109c11fd49a95b9ef6d9d8ff92708ba25e24f8cd86eb465d41463c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34d32f102109c11fd49a95b9ef6d9d8ff92708ba25e24f8cd86eb465d41463c->enter($__internal_e34d32f102109c11fd49a95b9ef6d9d8ff92708ba25e24f8cd86eb465d41463c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e34d32f102109c11fd49a95b9ef6d9d8ff92708ba25e24f8cd86eb465d41463c->leave($__internal_e34d32f102109c11fd49a95b9ef6d9d8ff92708ba25e24f8cd86eb465d41463c_prof);

        
        $__internal_e86a60d1afa83d077aafe1816dd9997f3e56e103cfdff111c63e6f12c1d1225d->leave($__internal_e86a60d1afa83d077aafe1816dd9997f3e56e103cfdff111c63e6f12c1d1225d_prof);

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
