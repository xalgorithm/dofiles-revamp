call pathogen#infect()
syntax on
set background=dark
let g:solarized_termcolors=256
" option name default optional
" ------------------------------------------------ 
"  g:solarized_termcolors= 16
"  | 256 g:solarized_termtrans = 0 | 1 g:solarized_degrade = 0 | 1
"  g:solarized_bold = 1 | 0 g:solarized_underline = 1 | 0 g:solarized_italic =
"  1 | 0 g:solarized_contrast = "normal"| "high" or "low"
"  g:solarized_visibility= "normal"| "high" or "low"
"  ------------------------------------------------i
let g:solarized_bold = 1
let g:solarized_degrade = 0
let g:solarized_contrast = "high"
let g:solarized_visibility = "high"
colorscheme solarized
filetype plugin indent on

call pathogen#infect()
