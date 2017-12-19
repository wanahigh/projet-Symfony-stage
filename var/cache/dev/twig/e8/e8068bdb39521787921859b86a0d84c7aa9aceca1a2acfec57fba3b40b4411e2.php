<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fc9f4bef3b0ee3247b96850ecdf3136b291bffbc4c7cc178f2b0bc7838c9af56 extends Twig_Template
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
        $__internal_d2640947268dc0bdaa6bbdff8b92d0771ef76177a7d6b87fa581cffc7dcecca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2640947268dc0bdaa6bbdff8b92d0771ef76177a7d6b87fa581cffc7dcecca7->enter($__internal_d2640947268dc0bdaa6bbdff8b92d0771ef76177a7d6b87fa581cffc7dcecca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_357d10195b06a23b824c9a33ef84d30db6c7e43bb17c622264b27a994b80261d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357d10195b06a23b824c9a33ef84d30db6c7e43bb17c622264b27a994b80261d->enter($__internal_357d10195b06a23b824c9a33ef84d30db6c7e43bb17c622264b27a994b80261d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d2640947268dc0bdaa6bbdff8b92d0771ef76177a7d6b87fa581cffc7dcecca7->leave($__internal_d2640947268dc0bdaa6bbdff8b92d0771ef76177a7d6b87fa581cffc7dcecca7_prof);

        
        $__internal_357d10195b06a23b824c9a33ef84d30db6c7e43bb17c622264b27a994b80261d->leave($__internal_357d10195b06a23b824c9a33ef84d30db6c7e43bb17c622264b27a994b80261d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
