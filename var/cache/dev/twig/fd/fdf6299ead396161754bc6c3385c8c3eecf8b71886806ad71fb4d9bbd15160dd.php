<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0fc62ecc987763e5411201d5d0f77c1b691b1f96a93ec06d97b8d7ca93c74abb extends Twig_Template
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
        $__internal_8bcbf3acd8efa8d8eda25f5d664349512fe4b1e5028ebad06cf111987003564d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bcbf3acd8efa8d8eda25f5d664349512fe4b1e5028ebad06cf111987003564d->enter($__internal_8bcbf3acd8efa8d8eda25f5d664349512fe4b1e5028ebad06cf111987003564d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_47f0925268f034c5b74ff4ba036e6d3a27a2cfaa085a42a29caf5333fc6286d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f0925268f034c5b74ff4ba036e6d3a27a2cfaa085a42a29caf5333fc6286d3->enter($__internal_47f0925268f034c5b74ff4ba036e6d3a27a2cfaa085a42a29caf5333fc6286d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8bcbf3acd8efa8d8eda25f5d664349512fe4b1e5028ebad06cf111987003564d->leave($__internal_8bcbf3acd8efa8d8eda25f5d664349512fe4b1e5028ebad06cf111987003564d_prof);

        
        $__internal_47f0925268f034c5b74ff4ba036e6d3a27a2cfaa085a42a29caf5333fc6286d3->leave($__internal_47f0925268f034c5b74ff4ba036e6d3a27a2cfaa085a42a29caf5333fc6286d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
