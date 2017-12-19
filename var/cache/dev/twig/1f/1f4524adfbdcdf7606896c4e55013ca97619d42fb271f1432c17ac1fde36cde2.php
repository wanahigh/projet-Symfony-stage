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
        $__internal_cbdc55520bcd3a4020e673425ebdff746c16977f5c7be6110f01f50503f66355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdc55520bcd3a4020e673425ebdff746c16977f5c7be6110f01f50503f66355->enter($__internal_cbdc55520bcd3a4020e673425ebdff746c16977f5c7be6110f01f50503f66355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c1c58cca10ffa34349b5a2ba5d404cf802b1450d3257f9061c9f6dc42b7f12fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c58cca10ffa34349b5a2ba5d404cf802b1450d3257f9061c9f6dc42b7f12fa->enter($__internal_c1c58cca10ffa34349b5a2ba5d404cf802b1450d3257f9061c9f6dc42b7f12fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_cbdc55520bcd3a4020e673425ebdff746c16977f5c7be6110f01f50503f66355->leave($__internal_cbdc55520bcd3a4020e673425ebdff746c16977f5c7be6110f01f50503f66355_prof);

        
        $__internal_c1c58cca10ffa34349b5a2ba5d404cf802b1450d3257f9061c9f6dc42b7f12fa->leave($__internal_c1c58cca10ffa34349b5a2ba5d404cf802b1450d3257f9061c9f6dc42b7f12fa_prof);

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
