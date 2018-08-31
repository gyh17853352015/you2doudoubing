<？PHP
//要为.htpasswd文件加密的密码
$ clearTextPassword ='0537ab';

//加密密码
$ password = crypt（$ clearTextPassword，base64_encode（$ clearTextPassword））;

//打印加密密码
echo $ password;
？>