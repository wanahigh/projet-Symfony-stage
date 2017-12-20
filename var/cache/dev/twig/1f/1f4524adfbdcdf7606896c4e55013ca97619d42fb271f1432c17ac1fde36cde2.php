<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b6988ad80a222065d115429cf688af6004776c007220188524c878efd68d1d14 extends Twig_Template
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
        $__internal_deaf82af345131642e0fe273a86b7f57001343718c811a51a40fc1ed54dcebf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deaf82af345131642e0fe273a86b7f57001343718c811a51a40fc1ed54dcebf2->enter($__internal_deaf82af345131642e0fe273a86b7f57001343718c811a51a40fc1ed54dcebf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9c304848dc26a0d00967b971fbac40e35c5fd70858b07f6cda4ca620b073242e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c304848dc26a0d00967b971fbac40e35c5fd70858b07f6cda4ca620b073242e->enter($__internal_9c304848dc26a0d00967b971fbac40e35c5fd70858b07f6cda4ca620b073242e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_deaf82af345131642e0fe273a86b7f57001343718c811a51a40fc1ed54dcebf2->leave($__internal_deaf82af345131642e0fe273a86b7f57001343718c811a51a40fc1ed54dcebf2_prof);

        
        $__internal_9c304848dc26a0d00967b971fbac40e35c5fd70858b07f6cda4ca620b073242e->leave($__internal_9c304848dc26a0d00967b971fbac40e35c5fd70858b07f6cda4ca620b073242e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
