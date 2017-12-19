<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_ac0a639dfb75c7fff742126c6413d984596f42bf5ffa1560dcfe6ba2274b4cd2 extends Twig_Template
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
        $__internal_981644380d5eb7f68a92bd48936987fd04117998f82c6db9ec657943f88ab6ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981644380d5eb7f68a92bd48936987fd04117998f82c6db9ec657943f88ab6ef->enter($__internal_981644380d5eb7f68a92bd48936987fd04117998f82c6db9ec657943f88ab6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_7fc71d3fc84af32adc06e541f6c7851adb2a6b3d991a3ef0c25e6906a78ae2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc71d3fc84af32adc06e541f6c7851adb2a6b3d991a3ef0c25e6906a78ae2fa->enter($__internal_7fc71d3fc84af32adc06e541f6c7851adb2a6b3d991a3ef0c25e6906a78ae2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_981644380d5eb7f68a92bd48936987fd04117998f82c6db9ec657943f88ab6ef->leave($__internal_981644380d5eb7f68a92bd48936987fd04117998f82c6db9ec657943f88ab6ef_prof);

        
        $__internal_7fc71d3fc84af32adc06e541f6c7851adb2a6b3d991a3ef0c25e6906a78ae2fa->leave($__internal_7fc71d3fc84af32adc06e541f6c7851adb2a6b3d991a3ef0c25e6906a78ae2fa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/html/Projet-Symfony-master/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
