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
        $__internal_7f3511aa1ae754ad43028b4361106f9423b863c5f9433cb22f6a029b8b5addbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3511aa1ae754ad43028b4361106f9423b863c5f9433cb22f6a029b8b5addbc->enter($__internal_7f3511aa1ae754ad43028b4361106f9423b863c5f9433cb22f6a029b8b5addbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2b9ae8f2a1759d0a09e24e0947b04fa787c9a7bd5c40904ba9e7443f48169414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9ae8f2a1759d0a09e24e0947b04fa787c9a7bd5c40904ba9e7443f48169414->enter($__internal_2b9ae8f2a1759d0a09e24e0947b04fa787c9a7bd5c40904ba9e7443f48169414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7f3511aa1ae754ad43028b4361106f9423b863c5f9433cb22f6a029b8b5addbc->leave($__internal_7f3511aa1ae754ad43028b4361106f9423b863c5f9433cb22f6a029b8b5addbc_prof);

        
        $__internal_2b9ae8f2a1759d0a09e24e0947b04fa787c9a7bd5c40904ba9e7443f48169414->leave($__internal_2b9ae8f2a1759d0a09e24e0947b04fa787c9a7bd5c40904ba9e7443f48169414_prof);

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
