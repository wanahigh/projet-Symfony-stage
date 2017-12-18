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
        $__internal_60c4f24a87f748c2099814696795bcf003d42dc27e6916033f4e45ff20050c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c4f24a87f748c2099814696795bcf003d42dc27e6916033f4e45ff20050c17->enter($__internal_60c4f24a87f748c2099814696795bcf003d42dc27e6916033f4e45ff20050c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_154cb6f0e317b82a370186d5b3559728cf806292a21a411ec5c159fcb56757f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154cb6f0e317b82a370186d5b3559728cf806292a21a411ec5c159fcb56757f0->enter($__internal_154cb6f0e317b82a370186d5b3559728cf806292a21a411ec5c159fcb56757f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_60c4f24a87f748c2099814696795bcf003d42dc27e6916033f4e45ff20050c17->leave($__internal_60c4f24a87f748c2099814696795bcf003d42dc27e6916033f4e45ff20050c17_prof);

        
        $__internal_154cb6f0e317b82a370186d5b3559728cf806292a21a411ec5c159fcb56757f0->leave($__internal_154cb6f0e317b82a370186d5b3559728cf806292a21a411ec5c159fcb56757f0_prof);

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
