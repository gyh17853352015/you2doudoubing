<��PHP
//ҪΪ.htpasswd�ļ����ܵ�����
$ clearTextPassword ='0537ab';

//��������
$ password = crypt��$ clearTextPassword��base64_encode��$ clearTextPassword����;

//��ӡ��������
echo $ password;
��>