## LoD
> *L*aw *o*f *D*emeter
[Закон Деметры (англ. Law of Demeter, LoD)](https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%BA%D0%BE%D0%BD_%D0%94%D0%B5%D0%BC%D0%B5%D1%82%D1%80%D1%8B) — набор правил проектирования при разработке программного обеспечения, в частности объектно-ориентированных программ, накладывающий ограничения на взаимодействия объектов (модулей). Обобщенно, закон Деметры является специальным случаем слабой связанности (англ. loose coupling).

Правило основывается на *принципе наименьшего знания*. Основной идеей является то, что объект должен иметь как можно меньше представления о структуре и свойствах чего угодно (включая собственные подкомпоненты).

Говоря упрощённо, каждый программный модуль:

    должен обладать ограниченным знанием о других модулях: знать о модулях, которые имеют «непосредственное» отношение к этому модулю.
    должен взаимодействовать только с известными ему модулями «друзьями», не взаимодействовать с незнакомцами.
    обращаться только к непосредственным «друзьям».

Аналогия из жизни: Если Вы хотите, чтобы собака побежала, глупо командовать её лапами, лучше отдать команду собаке, а она уже разберётся со своими лапами сама. 
[LoD](https://www.thinktocode.com/2017/12/04/law-of-demeter/)

## SOLID 
> **S*ingle responsibility principle, *O*pen–closed principle, *L*iskov substitution principle, *I*nterface segregation principle, *D*ependency inversion principle

## YAGNI 
>"You aren't gonna need it" (YAGNI) is a principle which arose from extreme programming (XP) that states a programmer should not add functionality until deemed necessary.Other forms of the phrase include "You aren't going to need it" (YAGTNI) and "You ain't gonna need it" (YAGNI).

>XP co-founder Ron Jeffries has written: "Always implement things when you actually need them, never when you just foresee that you need them." John Carmack has written "It is hard for less experienced developers to appreciate how rarely architecting for future requirements / applications turns out net-positive." 

>YAGNI («You aren't gonna need it»; с англ. — «Вам это не понадобится») — процесс и принцип проектирования ПО, при котором в качестве основной цели и/или ценности декларируется отказ от избыточной функциональности, — то есть отказ добавления функциональности, в которой нет непосредственной надобности.
Обоснование

>Согласно адептам принципа YAGNI, желание писать код, который не нужен прямо сейчас, но может понадобиться в будущем, приводит к следующим нежелательным последствиям:

    - Тратится время, которое было бы затрачено на добавление, тестирование и улучшение необходимой функциональности.
    - Новые функции должны быть отлажены, документированы и сопровождаться.
    - Новая функциональность ограничивает то, что может быть сделано в будущем, — ненужные новые функции могут впоследствии помешать добавить новые нужные.
    - Пока новые функции действительно не нужны, трудно полностью предугадать, что они должны делать, и протестировать их. Если новые функции тщательно не протестированы, они могут неправильно работать, когда впоследствии понадобятся.
    - Это приводит к тому, что программное обеспечение становится более сложным (подчас чрезмерно сложным).
    - Если вся функциональность не документирована, она может так и остаться неизвестной пользователям, но может создать различные риски для безопасности пользовательской системы.
    - Добавление новой функциональности может привести к желанию ещё более новой функциональности, приводя к эффекту «снежного кома».
## KISS 
> keep it  simple stupid
KISS (акроним для «Keep it simple, stupid» — «Делай проще, тупица») — принцип проектирования, принятый в ВМС США в 1960.

>Принцип KISS утверждает, что большинство систем работают лучше всего, если они остаются простыми, а не усложняются. Поэтому в области проектирования простота должна быть одной из ключевых целей, и следует избегать ненужной сложности. Фраза ассоциировалась с авиаконструктором Кларенсом Джонсоном (1910—1990). В 1970-х гг. широко использовался термин «KISS-принцип» (англ. KISS principle). Вариации на фразу включают «англ. Keep it Simple, Silly», «keep it short and simple», «keep it simple and straightforward» и «keep it small and simple». 
## DRY
>Принцип программирования DRY — don’t repeat yourself / не повторяйте себя

>Следование принципу программирования «DRY» позволяет добиться высокой сопровождаемости проекта, простоты внесения изменений и качественного тестирования.

>Если код не дублируется, то для изменения логики достаточно внесения исправлений всего в одном месте и проще тестировать одну (пусть и более сложную) функцию, а не набор из десятков однотипных. Следование принципу DRY всегда приводит к декомпозиции сложных алгоритмов на простые функции. А декомпозиция сложных операций на более простые (и повторно используемые) значительно упрощает понимание программного кода. Повторное использование функций, вынесенных из сложных алгоритмов, позволяет сократить время разработки и тестирования новой функциональности.

>Следование принципу DRY приводит к модульной архитектуре приложения и к чёткому разделению ответственности за бизнес-логику между программными классами. А это — залог сопровождаемой архитектуры. Хотя чаще не DRY приводит к модульности, а уже модульность, в свою очередь, обеспечивает принципиальную возможность соблюдения этого принципа в больших проектах.

>В рамках одного программного класса (или модуля) следовать DRY и не повторяться обычно достаточно просто. Также не требует титанических усилий делать это в рамках небольших проектов, где все разработчики «владеют» всем кодом системы. А вот в больших проектах ситуация с DRY несколько сложнее — повторы чаще всего появляются из-за отсутствия у разработчиков целостной картины или несогласованности действий в рамках команды. Следовать принципу «don’t repeat yourself» в рамках больших проектов не так просто, как это может показаться на первый взгляд. От разработчиков требуется тщательное планирование архитектуры, а от архитектора или тимлида требуется наличие видения системы в целом и чёткая постановка задач разработчикам.

---
[return to main page](../README.md)
