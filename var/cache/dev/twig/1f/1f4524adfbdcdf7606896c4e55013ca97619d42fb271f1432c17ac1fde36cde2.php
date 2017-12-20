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
        $__internal_042043fd1d4e9e52a3a95bfd86bfd4c5b353dbac4ff184550785174bbe0bc17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042043fd1d4e9e52a3a95bfd86bfd4c5b353dbac4ff184550785174bbe0bc17f->enter($__internal_042043fd1d4e9e52a3a95bfd86bfd4c5b353dbac4ff184550785174bbe0bc17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_72e38710f81c5a3b744773f1f71390aaaef1a1f139b25f4a149f47e869e59a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e38710f81c5a3b744773f1f71390aaaef1a1f139b25f4a149f47e869e59a3a->enter($__internal_72e38710f81c5a3b744773f1f71390aaaef1a1f139b25f4a149f47e869e59a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_042043fd1d4e9e52a3a95bfd86bfd4c5b353dbac4ff184550785174bbe0bc17f->leave($__internal_042043fd1d4e9e52a3a95bfd86bfd4c5b353dbac4ff184550785174bbe0bc17f_prof);

        
        $__internal_72e38710f81c5a3b744773f1f71390aaaef1a1f139b25f4a149f47e869e59a3a->leave($__internal_72e38710f81c5a3b744773f1f71390aaaef1a1f139b25f4a149f47e869e59a3a_prof);

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
