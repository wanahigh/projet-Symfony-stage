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
        $__internal_39589fc280968ad58ef484da326f91392ee77a0520f7eefb067b5c708ccb5662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39589fc280968ad58ef484da326f91392ee77a0520f7eefb067b5c708ccb5662->enter($__internal_39589fc280968ad58ef484da326f91392ee77a0520f7eefb067b5c708ccb5662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_fd5267d24a12da4e022eabec575afd45e8e62b82fb0c06c9d5ed946f4280318a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5267d24a12da4e022eabec575afd45e8e62b82fb0c06c9d5ed946f4280318a->enter($__internal_fd5267d24a12da4e022eabec575afd45e8e62b82fb0c06c9d5ed946f4280318a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_39589fc280968ad58ef484da326f91392ee77a0520f7eefb067b5c708ccb5662->leave($__internal_39589fc280968ad58ef484da326f91392ee77a0520f7eefb067b5c708ccb5662_prof);

        
        $__internal_fd5267d24a12da4e022eabec575afd45e8e62b82fb0c06c9d5ed946f4280318a->leave($__internal_fd5267d24a12da4e022eabec575afd45e8e62b82fb0c06c9d5ed946f4280318a_prof);

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
