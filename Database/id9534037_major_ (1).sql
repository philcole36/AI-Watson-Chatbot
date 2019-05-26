-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2019 at 05:23 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9534037_major_`
--

-- --------------------------------------------------------

--
-- Table structure for table `allpapers`
--

CREATE TABLE `allpapers` (
  `ID` varchar(30) NOT NULL,
  `Year` varchar(4000) NOT NULL,
  `Description` varchar(4000) NOT NULL,
  `Title` varchar(4000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allpapers`
--

INSERT INTO `allpapers` (`ID`, `Year`, `Description`, `Title`) VALUES
('pastpaper', '2018/2019', 'Past paper ', 'programming 2');

-- --------------------------------------------------------

--
-- Table structure for table `alltutorial`
--

CREATE TABLE `alltutorial` (
  `name` varchar(5000) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `id` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alltutorial`
--

INSERT INTO `alltutorial` (`name`, `description`, `id`) VALUES
('tquestio', 'Tutorial on functions', '112'),
('MINE ', 'kill ', '  45');

-- --------------------------------------------------------

--
-- Table structure for table `mine`
--

CREATE TABLE `mine` (
  `Id` int(11) NOT NULL,
  `Topic` varchar(5000) NOT NULL,
  `Theory` varchar(5000) NOT NULL,
  `Question` varchar(5000) NOT NULL,
  `Code` varchar(5000) NOT NULL,
  `Answer` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mine`
--

INSERT INTO `mine` (`Id`, `Topic`, `Theory`, `Question`, `Code`, `Answer`) VALUES
(45, 'polo    ', 'slslsl     ', 'llslsl    ', 'lslslsl    ', 'lslslsl ');

-- --------------------------------------------------------

--
-- Table structure for table `pastpaper`
--

CREATE TABLE `pastpaper` (
  `Id` int(11) NOT NULL,
  `Topic` varchar(5000) NOT NULL,
  `Theory` varchar(5000) NOT NULL,
  `Question` varchar(5000) NOT NULL,
  `Code` varchar(5000) NOT NULL,
  `Answer` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pastpaper`
--

INSERT INTO `pastpaper` (`Id`, `Topic`, `Theory`, `Question`, `Code`, `Answer`) VALUES
(1, 'Past Paper 2017/2018 Semester 2', '<h3 style=\"text-align:center;\">rand ()</h3>\r\n<br>\r\n<br>\r\n\r\nrand() function is used in C to generate random numbers. If we generate a sequence of random number with rand() function, it will create the same sequence again and again every time program runs. Say if we are generating 5 random numbers in C with the help of rand() in a loop, then every time we compile and run the program our output must be the same sequence of numbers.\r\n<br>\r\n<br>\r\n<h3>Syntax:</h3>\r\n\r\n int rand(void): \r\nreturns a pseudo-random number in the range of 0 to RAND_MAX.\r\nRAND_MAX: is a constant whose default value may vary \r\nbetween implementations but it is granted to be at least 32767.\r\n\r\n<br>\r\n<br>\r\n<br>\r\n<h3>Example</h3>\r\n\r\n// C program to generate random numbers <br>\r\n#include <stdio.h> <br>\r\n#include <stdlib.h> <br>\r\n  \r\n// Driver program <br>\r\nint main(void) <br>\r\n{ <br>\r\n    // This program will create same sequence of  \r\n    // random numbers on every program run  <br>\r\n  \r\n    for(int i = 0; i<5; i++) <br>\r\n        printf(\" %d \", rand());<br> \r\n    return 0; <br>\r\n} ', 'Write C code needed to randomly generate a number for the following ranges:<br><br> 3 <= n <= 20', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nn = 3 + rand() % 18\r\n   return 0;\r\n}'),
(2, 'Past Paper 2017/2018 Semester 2', '<h3 style=\"text-align:center;\">rand ()</h3>\r\n<br>\r\n<br>\r\n\r\nrand() function is used in C to generate random numbers. If we generate a sequence of random number with rand() function, it will create the same sequence again and again every time program runs. Say if we are generating 5 random numbers in C with the help of rand() in a loop, then every time we compile and run the program our output must be the same sequence of numbers.\r\n<br>\r\n<br>\r\n<h3>Syntax:</h3>\r\n\r\n int rand(void): \r\nreturns a pseudo-random number in the range of 0 to RAND_MAX.\r\nRAND_MAX: is a constant whose default value may vary \r\nbetween implementations but it is granted to be at least 32767.\r\n\r\n<br>\r\n<br>\r\n<br>\r\n<h3>Example</h3>\r\n\r\n// C program to generate random numbers <br>\r\n#include <stdio.h> <br>\r\n#include <stdlib.h> <br>\r\n  \r\n// Driver program <br>\r\nint main(void) <br>\r\n{ <br>\r\n    // This program will create same sequence of  \r\n    // random numbers on every program run  <br>\r\n  \r\n    for(int i = 0; i<5; i++) <br>\r\n        printf(\" %d \", rand());<br> \r\n    return 0; <br>\r\n} ', 'Write C code needed to randomly generate a number for the following ranges:<br> 1, 8, 15, 22, 29', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n1 + rand() % 5 * 7\r\n   return 0;\r\n}'),
(3, 'Past Paper 2017/2018 Semester 2', '<h3>Function Prototypes</h3>\r\n\r\nA prototype declares the function name, its parameters, and its return type to the rest of the program prior to the function\'s actual declaration. To understand why function prototypes are useful, enter the following code and run it:<br>\r\n\r\n#include <stdio.h><br>\r\n\r\nvoid main()<br>\r\n{<br>\r\n\r\n    printf(\"%d\\n\",add(3));<br>\r\n}<br>\r\n\r\nint add(int i, int j)<br>\r\n\r\n{<br>\r\n\r\n    return i+j;<br>\r\n\r\n}<br>\r\n\r\n\r\nC compilers do not check for parameter matching either in type or count. You can waste an enormous amount of time debugging code in which you are simply passing one too many or too few parameters by mistake. The above code compiles properly, but it produces the wrong answer.<br>\r\n\r\nTo solve this problem, C lets you place function prototypes at the beginning of (actually, anywhere in) a program. If you do so, C checks the types and counts of all parameter lists. Try compiling the following:<br>\r\n\r\n#include <stdio.h><br>\r\n\r\nint add (int,int); /* function prototype for add */<br>\r\n\r\nvoid main()<br>\r\n{<br>\r\n    printf(\"%d\\n\",add(3));<br>\r\n}\r\n<br>\r\nint add(int i, int j)<br>\r\n{<br>\r\n    return i+j;<br>\r\n}', 'Write the function prototype for the function Convert that accepts one (1) string argument\r\nand returns a character data type.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nchar Convert(char *) Or char Convert(char []);\r\n   return 0;\r\n}'),
(4, 'Past Paper 2017/2018 Semester 2', 'A C function definition consists of a function header and a function body. Here are all the parts of a function header\r\n\r\nReturn Type  A function may return a value. The return_type is the data type of the value the function returns. Some functions perform the desired operations without returning a value. In this case, the return_type is the keyword void.\r\n\r\nFunction Name  This is the actual name of the function. The function name and the parameter list together constitute the function signature.\r\n\r\nParameters  A parameter is like a placeholder. When a function is invoked, you pass a value to the parameter. \r\n\r\nE.g. return_type function_name( parameter list )', 'Write the function header for the function Elevate that accepts three (3) integer arguments, a\r\n2D array called LIST[3][4], and variables key and set. The function returns a floating-point\r\nvalue.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nfloat Elevate(int LIST[3][4], int key, int set)\r\n   return 0;\r\n}'),
(5, 'Past Paper 2017/2018 Semester 2', 'You can use int fscanf(FILE *fp, const char *format, ...) function to read strings from a file, but it stops reading after encountering the first space character.', 'Assume FILE pointer fPtr has already been declared. Write a C statement that correctly\r\nreads two (2) string values from a sequential file called “Register.txt”.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nfscanf(fPtr, “%fs %s”, &val1, &val2);\r\n   return 0;\r\n}'),
(6, 'Past Paper 2017/2018 Semester 2', 'The keyword ‘enum’ is used to declare new enumeration types in C and C++. Following is an example of enum declaration.\r\n\r\nenum flag{constant1, constant2, constant3, ....... };', 'Write the definition for an enumerated type LEVEL with the following members: beginner,\r\nintermediate, expert, master. The defaults values are 10, 11, 99, and 100 respectively.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nenum LEVEL {beginner = 10, intermediate = 11, expert = 99, master = 100};\r\n   return 0;\r\n}'),
(7, 'Past Paper 2017/2018 Semester 2', 'Pointers in C language is a variable that stores/points the address of another variable. A Pointer in C is used to allocate memory dynamically i.e. at run time. The pointer variable might be belonging to any of the data type such as int, float, char, double, short etc.\r\n\r\nPointer Syntax : data_type *var_name; Example : int *p;  char *p;', 'Assume that a floating-point value occupies 4 bytes of memory. The starting address of the\r\nfloating-point array Account is at 41500 in memory. Assume the pointer *actPtr is already\r\ndeclared and currently points to the first address in the array.\r\nfloat Account[] ={150.9, 240.0, 110.5, 0, 190.9, 100.0, 50.5};\r\n\r\nUsing pointer offset/notation, write an expression that will print the value at index 4.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nprintf(“%d”, *(actPtr + 4));\r\n   return 0;\r\n}'),
(8, 'Past Paper 2017/2018 Semester 2', 'Pointers in C language is a variable that stores/points the address of another variable. A Pointer in C is used to allocate memory dynamically i.e. at run time. The pointer variable might be belonging to any of the data type such as int, float, char, double, short etc.\r\nPointer Syntax : data_type *var_name; Example : int *p;  char *p;', 'Assume that a floating-point value occupies 4 bytes of memory. The starting address of the\r\nfloating-point array Account is at 41500 in memory. Assume the pointer *actPtr is already\r\ndeclared and currently points to the first address in the array.\r\nfloat Account[] ={150.9, 240.0, 110.5, 0, 190.9, 100.0, 50.5};\r\nWhat will be the output after executing the following statements in order:\r\nactPtr = actPtr + 4;\r\nprintf(“%p”, actPtr);', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n41516\r\n   return 0;\r\n}'),
(9, 'Past Paper 2017/2018 Semester 2', 'Structure is a user-defined datatype in C language which allows us to combine data of different types together. Structure helps to construct a complex data type which is more meaningful. It is somewhat similar to an Array, but an array holds data of similar type only. But structure on the other hand, can store data of any type, which is practical more useful. struct keyword is used to define a structure. struct defines a new data type which is a collection of primary and derived datatypes.\r\n\r\nE.g. struct [structure_tag]\r\n{\r\n    //member variable 1\r\n    //member variable 2\r\n    //member variable 3\r\n    ...\r\n};', 'Define a structure called Inventory that contains the data members: inventoryId (int),\r\nprodCode (string), prodQty (int), prodValue (float).', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nstruct Inventory{\r\nint inventoryId;\r\nchar * prodCode;\r\nint prodQty;\r\nfloat prodValue;\r\n};\r\n   return 0;\r\n}'),
(10, 'Past Paper 2017/2018 Semester 2', 'Structure is a user-defined datatype in C language which allows us to combine data of different types together. Structure helps to construct a complex data type which is more meaningful. It is somewhat similar to an Array, but an array holds data of similar type only. But structure on the other hand, can store data of any type, which is practical more useful. struct keyword is used to define a structure. struct defines a new data type which is a collection of primary and derived datatypes.\r\n\r\nE.g. struct [structure_tag]\r\n{\r\n    //member variable 1\r\n    //member variable 2\r\n    //member variable 3\r\n    ...\r\n};', 'Define a structure called Inventory that contains the data members: inventoryId (int),\r\nprodCode (string), prodQty (int), prodValue (float).\r\n\r\nWrite C code to declare the variable item of data type Inventory from part a) above. Use this\r\nvariable to store keyboard input for each of the data members in Inventory.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nstruct Inventory item;\r\nscanf(“%d”, & item.inventoryId);\r\nscanf(“%s”, & item.prodCode);\r\nscanf(“%d”, & item.prodQty);\r\nscanf(“%f”, & item.prodValue);\r\n   return 0;\r\n}'),
(11, 'Past Paper 2017/2018 Semester 2', 'Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.', 'Assume the floating-point array Total can hold 25 elements. Write a single statement to\r\ndeclare and initialize this array with default value 0.\r\n\r\nDeclaring an array - type arrayName [ arraySize ];', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here,\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nfloat Total[25] = {0};\r\n   return 0;\r\n}'),
(12, 'Past Paper 2017/2018 Semester 2', 'Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.', 'Write C code to populate the array Total with random numbers in the range 0 to 100.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nfor(int i=0; i<25; i++){\r\nTotal[i] = rand()% 101\r\n}\r\n   return 0;\r\n}'),
(13, 'Past Paper 2017/2018 Semester 2', 'Pointers in C are easy and fun to learn. Some C programming tasks are performed more easily with pointers, and other tasks, such as dynamic memory allocation, cannot be performed without using pointers. So it becomes necessary to learn pointers to become a perfect C programmer. Let\'s start learning them in simple and easy steps.\r\n\r\nPointer Declartion - type *var-name;', 'Write a single statement to declare and initialize a pointer variable of type integer; call this\r\npointer tPtr. Use an appropriate default value to initialize the pointer.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here,\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nfloat *tPtr = NULL;\r\n   return 0;\r\n}'),
(14, 'Past Paper 2017/2018 Semester 2', 'Pointers in C are easy and fun to learn. Some C programming tasks are performed more easily with pointers, and other tasks, such as dynamic memory allocation, cannot be performed without using pointers. So it becomes necessary to learn pointers to become a perfect C programmer. Let\'s start learning them in simple and easy steps.', 'Write a single statement to declare and initialize a pointer variable of type integer; call this\r\npointer tPtr. Use an appropriate default value to initialize the pointer.\r\n\r\nWrite a single statement to assign the last address of the array, Total, to the pointer variable\r\ntPtr from part above.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here,\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\ntPtr = &Total[5];\r\n   return 0;\r\n}'),
(15, 'Past Paper 2017/2018 Semester 2', 'Pointers in C are easy and fun to learn. Some C programming tasks are performed more easily with pointers, and other tasks, such as dynamic memory allocation, cannot be performed without using pointers. So it becomes necessary to learn pointers to become a perfect C programmer. Let\'s start learning them in simple and easy steps.', 'Given the pointer variable tPtr, use pointer offset/notation to display the value at index 2 of\r\nthe array, Total. *NB. The pointer is currently storing the last address location in the array.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here,\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nprintf(“%d”, *(vPtr - 3 ));\r\n   return 0;\r\n}'),
(16, 'Past Paper 2017/2018 Semester 2', 'Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.', 'Define the function DisplayTotal that accepts one (1) integer argument, a pointer variable to\r\n6\r\nan array. The size of the array is declared globally as SIZE. When executed, the function uses\r\npointer offset/notation to print all the values in the array. The function returns nothing.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here,\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nvoid DisplayTotal(int *tPtr)\r\n{\r\nfor (int count = 0; count < SIZE; count++)\r\n{\r\nprintf(“%d\\n”, *(tPtr + count));\r\n}\r\n}\r\n   return 0;\r\n}'),
(17, 'Past Paper 2017/2018 Semester 2', 'Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.', 'Assume the tagged-structure Student contains data members: studentId(int), studentName\r\n(string), studentGrades[3] (float), has already been defined.\r\n\r\nDefine STUDENT as an alias for the structure Student. *Do not redefine the structure!', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here,\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\ntypedef struct Student STUDENT;\r\n   return 0;\r\n}'),
(18, 'Past Paper 2017/2018 Semester 2', 'Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.', 'Assume the tagged-structure Student contains data members: studentId(int), studentName\r\n(string), studentGrades[3] (float), has already been defined.\r\n\r\nPrevious Question - Define STUDENT as an alias for the structure Student. *Do not redefine the structure!\r\n\r\nCurrent Question - Using the structure alias from part above, declare studentDetails as a variable of data-type\r\nSTUDENT and assign to it appropriate default values.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here,\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nSTUDENT studentDetails = {0, “”, {0.0, 0.0, 0.0 }};\r\n   return 0;\r\n}'),
(19, 'Past Paper 2017/2018 Semester 2', 'Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.', 'Assume the tagged-structure Student contains data members: studentId(int), studentName\r\n(string), studentGrades[3] (float), has already been defined.\r\n\r\nPrevious Question - Using the structure alias from part above, declare studentDetails as a variable of data-type\r\nSTUDENT and assign to it appropriate default values.\r\n\r\nCurrent Question - Write C code to read from keyboard input a student’s details based on the data members of\r\nthe structure. Store the input in variable studentDetails from part above. ', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here,\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nint i=0;\r\nscanf(“%d”, &studentDetails.studentId);\r\nscanf(“%s”, studentDetails.studentName);\r\nfor(i=0; i<3; i++)\r\n{\r\nscanf(“%f”, &studentDetails.studentGrades[i]);\r\n}\r\n   return 0;\r\n}'),
(20, 'Past Paper 2017/2018 Semester 2', 'Structure is a user-defined datatype in C language which allows us to combine data of different types together. Structure helps to construct a complex data type which is more meaningful. It is somewhat similar to an Array, but an array holds data of similar type only. But structure on the other hand, can store data of any type, which is practical more useful.\r\nstruct keyword is used to define a structure. struct defines a new data type which is a collection of primary and derived datatypes.\r\n\r\nE.g.struct [structure_tag]\r\n{\r\n    //member variable 1\r\n    //member variable 2\r\n    //member variable 3\r\n    ...\r\n};', 'Assume the tagged-structure Student contains data members: studentId(int), studentName\r\n(string), studentGrades[3] (float), has already been defined.\r\n\r\nDeclare studentList as an array of data-type STUDENT capable of holding 25 elements.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here,\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nSTUDENT studentList[25];\r\n   return 0;\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `tquestio`
--

CREATE TABLE `tquestio` (
  `Id` int(11) NOT NULL,
  `Topic` varchar(5000) NOT NULL,
  `Theory` text NOT NULL,
  `Question` varchar(5000) NOT NULL,
  `Code` varchar(5000) NOT NULL,
  `Answer` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tquestio`
--

INSERT INTO `tquestio` (`Id`, `Topic`, `Theory`, `Question`, `Code`, `Answer`) VALUES
(1, 'Functions  ', 'A C function definition consists of a function header and a function body. Here are all the parts of a function header<br>\r\n\r\n\r\nReturn Type  A function may return a value. The return_type is the data type of the value the function returns. Some functions perform the desired operations without returning a value. In this case, the return_type is the keyword void.<br>\r\n\r\n\r\nFunction Name  This is the actual name of the function. The function name and the parameter list together constitute the function signature.<br>\r\n\r\n\r\nParameters  A parameter is like a placeholder. When a function is invoked, you pass a value to the parameter. \r\n<br>\r\nE.g. return_type function_name( parameter list )    ', '    Write the function header for the function Elevate that accepts three (3) integer arguments, a\r\n2D array called Calculate[5][8], and variables num and sum. The function returns a float value.    ', '    #include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n\r\n{}\r\n   return 0;\r\n}    ', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nfloat Elevate(int Calculate[5][8], int num, int sum)\r\n{}\r\n   return 0;\r\n}        '),
(2, 'Functions', '<h3>Function Prototypes</h3>\r\n\r\nA prototype declares the function name, its parameters, and its return type to the rest of the program prior to the function\'s actual declaration. To understand why function prototypes are useful, enter the following code and run it:<br>\r\n\r\n#include <stdio.h><br>\r\n\r\nvoid main()<br>\r\n{<br>\r\n\r\n    printf(\"%d\\n\",add(3));<br>\r\n}<br>\r\n\r\nint add(int i, int j)<br>\r\n\r\n{<br>\r\n\r\n    return i+j;<br>\r\n\r\n}<br>\r\n\r\n\r\nC compilers do not check for parameter matching either in type or count. You can waste an enormous amount of time debugging code in which you are simply passing one too many or too few parameters by mistake. The above code compiles properly, but it produces the wrong answer.<br>\r\n\r\nTo solve this problem, C lets you place function prototypes at the beginning of (actually, anywhere in) a program. If you do so, C checks the types and counts of all parameter lists. Try compiling the following:<br>\r\n\r\n#include <stdio.h><br>\r\n\r\nint add (int,int); /* function prototype for add */<br>\r\n\r\nvoid main()<br>\r\n{<br>\r\n    printf(\"%d\\n\",add(3));<br>\r\n}\r\n<br>\r\nint add(int i, int j)<br>\r\n{<br>\r\n    return i+j;<br>\r\n}', 'Write the function prototype for the function Task that accepts one (1) int argument\r\nand returns a int data type. ', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nint Task(int );\r\n   return 0;\r\n}'),
(3, 'Functions', 'A C function definition consists of a function header and a function body. Here are all the parts of a function header\r\n\r\nReturn Type  A function may return a value. The return_type is the data type of the value the function returns. Some functions perform the desired operations without returning a value. In this case, the return_type is the keyword void.\r\n\r\nFunction Name  This is the actual name of the function. The function name and the parameter list together constitute the function signature.\r\n\r\nParameters  A parameter is like a placeholder. When a function is invoked, you pass a value to the parameter. \r\n\r\nE.g. return_type function_name( parameter list )', 'Write the function header for the function Life that accepts three (3) integer arguments, a\r\n2D array called GO[10][3], and variables man and woman. The function returns a integer value.', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nint Life(int GO[10][2], int man, int woman){}\r\n   return 0;\r\n}'),
(4, 'Functions', 'A C function definition consists of a function header and a function body. Here are all the parts of a function header\r\n\r\nReturn Type  A function may return a value. The return_type is the data type of the value the function returns. Some functions perform the desired operations without returning a value. In this case, the return_type is the keyword void.\r\n\r\nFunction Name  This is the actual name of the function. The function name and the parameter list together constitute the function signature.\r\n\r\nParameters  A parameter is like a placeholder. When a function is invoked, you pass a value to the parameter. \r\n\r\nE.g. return_type function_name( parameter list )', 'Write the function prototype for the function Max that takes two integers as parameters \r\nand returns an integer', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\n\r\n   return 0;\r\n}', '#include <stdio.h>\r\nint main()\r\n{\r\n   //place answer below here\r\nint Max (int,int);\r\n   return 0;\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `description` varchar(5000) NOT NULL,
  `title` varchar(500) NOT NULL,
  `Id` int(10) NOT NULL,
  `tutorial` varchar(5000) NOT NULL,
  `lecture` varchar(5000) NOT NULL,
  `fk` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`description`, `title`, `Id`, `tutorial`, `lecture`, `fk`) VALUES
('', 'Functions', 1, 'tutorial1.pdf', 'lecture1.pdf', 'tquestio\r\n'),
('', 'Pointer', 2, 'tutorial2', 'lecture2', ''),
('', 'Structures & Unions', 3, 'tutirial3', 'lecture3', ''),
('', 'File Processing', 4, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allpapers`
--
ALTER TABLE `allpapers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `alltutorial`
--
ALTER TABLE `alltutorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mine`
--
ALTER TABLE `mine`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pastpaper`
--
ALTER TABLE `pastpaper`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tquestio`
--
ALTER TABLE `tquestio`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
