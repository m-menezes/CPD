{\rtf1\ansi\deff0\adeflang1025
{\fonttbl{\f0\froman\fprq2\fcharset0 Times New Roman;}{\f1\froman\fprq2\fcharset2 Symbol;}{\f2\fswiss\fprq2\fcharset0 Arial;}{\f3\fnil\fprq2\fcharset0 Microsoft YaHei;}{\f4\fnil\fprq2\fcharset0 Mangal;}{\f5\fnil\fprq0\fcharset128 Mangal;}}
{\colortbl;\red0\green0\blue0;\red128\green128\blue128;}
{\stylesheet{\s0\snext0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046 Padrão;}
{\s15\sbasedon0\snext16\sb240\sa120\keepn\hich\af3\dbch\af4\afs28\loch\f2\fs28 Título;}
{\s16\sbasedon0\snext16\sb0\sa120 Corpo do texto;}
{\s17\sbasedon16\snext17\sb0\sa120\dbch\af5 Lista;}
{\s18\sbasedon0\snext18\sb120\sa120\noline\i\dbch\af5\afs24\ai\fs24 Legenda;}
{\s19\sbasedon0\snext19\noline\dbch\af5 Índice;}
}{\info{\creatim\yr0\mo0\dy0\hr0\min0}{\revtim\yr0\mo0\dy0\hr0\min0}{\printim\yr0\mo0\dy0\hr0\min0}{\comment OpenOffice}{\vern4130}}\deftab709

{\*\pgdsctbl
{\pgdsc0\pgdscuse195\pgwsxn11906\pghsxn16838\marglsxn1134\margrsxn1134\margtsxn1134\margbsxn1134\pgdscnxt0 Padr\'e3o;}}
\formshade\paperh16838\paperw11906\margl1134\margr1134\margt1134\margb1134\sectd\sbknone\sectunlocked1\pgndec\pgwsxn11906\pghsxn16838\marglsxn1134\margrsxn1134\margtsxn1134\margbsxn1134\ftnbj\ftnstart1\ftnrstcont\ftnnar\aenddoc\aftnrstcont\aftnstart1\aftnnrlc
\pgndec\pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch\loch
<script type="text/javascript">}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
    }{\rtlch \ltrch\loch
$(function()\{}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
       }{\rtlch \ltrch\loch
$.ajax(\{}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
          }{\rtlch \ltrch\loch
url: 'http://site.ufsm.br/', // p\'e1gina da requisi\'e7\'e3o externa}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
          }{\rtlch \ltrch\loch
type: 'GET',}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
          }{\rtlch \ltrch\loch
// par\'e2metro "html" vem com o conte\'fado da p\'e1gina completo}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
          }{\rtlch \ltrch\loch
success: function(html) \{}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch\loch
}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
           }{\rtlch \ltrch\loch
// Pegamos somente <li> da p\'e1gina externa}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
            }{\rtlch \ltrch\loch
var $lis = $(html).find('#agenda');}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
            }{\rtlch \ltrch\loch
var $bus = $(html).find('#onibus');}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch\loch
}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
           }{\rtlch \ltrch\loch
// Mandamos para o elemento de id "cabecalho" da nossa p\'e1gina}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
            }{\rtlch \ltrch\loch
$("#agenda1").html($lis);}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
            }{\rtlch \ltrch\loch
$("#bus").html($bus);}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
        }{\rtlch \ltrch\loch
\}}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
      }{\rtlch \ltrch\loch
\}); }
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
    }{\rtlch \ltrch\loch
\});}
\par \pard\plain \s0\nowidctlpar{\*\hyphen2\hyphlead2\hyphtrail2\hyphmax0}\cf0\hich\af6\langfe2052\dbch\af4\afs24\lang1081\loch\f0\fs24\lang1046{\rtlch \ltrch
    }{\rtlch \ltrch\loch
</script>}
\par }