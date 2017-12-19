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
        $__internal_dc2f5b5ab154e5630900a1b074b85783151573bb1ad4805f2d216c1a987b92b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2f5b5ab154e5630900a1b074b85783151573bb1ad4805f2d216c1a987b92b1->enter($__internal_dc2f5b5ab154e5630900a1b074b85783151573bb1ad4805f2d216c1a987b92b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e662b0c92556d8dacf56efc094080eb36885f8b74b8f40ee5a77f9646dc58bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e662b0c92556d8dacf56efc094080eb36885f8b74b8f40ee5a77f9646dc58bf4->enter($__internal_e662b0c92556d8dacf56efc094080eb36885f8b74b8f40ee5a77f9646dc58bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_dc2f5b5ab154e5630900a1b074b85783151573bb1ad4805f2d216c1a987b92b1->leave($__internal_dc2f5b5ab154e5630900a1b074b85783151573bb1ad4805f2d216c1a987b92b1_prof);

        
        $__internal_e662b0c92556d8dacf56efc094080eb36885f8b74b8f40ee5a77f9646dc58bf4->leave($__internal_e662b0c92556d8dacf56efc094080eb36885f8b74b8f40ee5a77f9646dc58bf4_prof);

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
