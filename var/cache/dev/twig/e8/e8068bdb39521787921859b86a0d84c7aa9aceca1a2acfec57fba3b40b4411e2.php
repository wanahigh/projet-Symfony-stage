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
        $__internal_2a4dca622598f887d7493069688ef116f9c9a421dd633bc67300d84a7e55c8f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a4dca622598f887d7493069688ef116f9c9a421dd633bc67300d84a7e55c8f6->enter($__internal_2a4dca622598f887d7493069688ef116f9c9a421dd633bc67300d84a7e55c8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0e2d6e8114d7eb2929e052b087ce7160d1d7f0427086819d527b2bff34869477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2d6e8114d7eb2929e052b087ce7160d1d7f0427086819d527b2bff34869477->enter($__internal_0e2d6e8114d7eb2929e052b087ce7160d1d7f0427086819d527b2bff34869477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2a4dca622598f887d7493069688ef116f9c9a421dd633bc67300d84a7e55c8f6->leave($__internal_2a4dca622598f887d7493069688ef116f9c9a421dd633bc67300d84a7e55c8f6_prof);

        
        $__internal_0e2d6e8114d7eb2929e052b087ce7160d1d7f0427086819d527b2bff34869477->leave($__internal_0e2d6e8114d7eb2929e052b087ce7160d1d7f0427086819d527b2bff34869477_prof);

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
