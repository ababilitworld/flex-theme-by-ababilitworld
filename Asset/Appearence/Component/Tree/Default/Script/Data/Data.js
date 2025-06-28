class Data 
{
    constructor() 
    {
        const data = {
            0: {                
                node: {
                    name: "Madd (مد)",
                    definition: "Madd means extension or prolongation of sound when pronouncing specific Arabic letters.",
                    condition: "Occurs when one of the Madd letters (ا، و، ي) is present.",
                    duration: "Varies depending on the type of Madd.",
                    example: {
                        0: "قالوا",
                        1: "السماء",
                        2: "يؤمنون",
                        3: "شَاءَ",
                        4: "رُوحِ",
                        5: "في سبيل",
                        6: "آمنوا",
                        7: "يُوضِحُ",
                        8: "تَسُوءُ"
                    },
                    explanation: "Madd is an important rule in Tajweed that governs the elongation of vowels in Quranic recitation."
                }, 
                parent: null,
                children: {0:1, 1:2}
            },
            1: {                
                node: {
                    name: "Madd Asli (مد طبيعي)",
                    definition: "The natural elongation of a vowel sound without any external cause.",
                    condition: "Occurs when a Madd letter (ا، و، ي) is not followed by a Hamzah or Sukoon.",
                    duration: "2 harakat.",
                    example: {
                        0: "نوح",
                        1: "قال",
                        2: "في",
                        3: "هو",
                        4: "يقول",
                        5: "يحيى",
                        6: "سماء",
                        7: "كبير",
                        8: "عظيم"
                    },
                    explanation: "It is the basic type of Madd and serves as a foundation for other types of elongation."
                }, 
                parent: 0,
                children: {} 
            },
            2: {                
                node: {
                    name: "Madd Far'i (مد فرعي)",
                    definition: "A secondary extension caused by Hamzah or Sukoon.",
                    condition: "Occurs when a Madd letter (ا، و، ي) is followed by a Hamzah (ء) or a letter with Sukoon.",
                    duration: "Varies (2 to 6 harakat depending on the type).",
                    example: {
                        0: "يَشَاءُ",
                        1: "السَّمَاءِ",
                        2: "قُرُوءٍ",
                        3: "يُؤْمِنُونَ",
                        4: "أُوذُوا",
                        5: "الضَّالِّينَ",
                        6: "الصُّورِ",
                        7: "يَوْمَئِذٍ",
                        8: "الْمُفْلِحُونَ"
                    },
                    explanation: "This type includes all elongations caused by Hamzah or Sukoon, leading to various subcategories."
                }, 
                parent: 0,
                children: {0:3, 1:4}
            },
            3: {                
                node: {
                    name: "Madd caused by Hamzah (مد بسبب الهمزة)",
                    definition: "A category of Madd that occurs when a Madd letter is followed by a Hamzah (ء).",
                    condition: "Occurs when one of the Madd letters (ا، و، ي) is directly followed by a Hamzah.",
                    duration: "4 to 6 harakat.",
                    example: {
                        0: "السَّمَاءِ",
                        1: "جَاءَ",
                        2: "يَرَاءُونَ",
                        3: "أُوتُوا",
                        4: "إِيمَانًا",
                        5: "قُرُوءٍ",
                        6: "إِسْرَائِيلَ",
                        7: "بِمَا أُنْزِلَ",
                        8: "فِي أُذُنِهِ"
                    },
                    explanation: "This category includes Madd Muttasil and Madd Munfasil, where the presence of Hamzah requires elongation."
                }, 
                parent: 2,
                children: {0:6, 1:7, 2:8} 
            },            
            4: {                
                node: {
                    name: "Madd caused by Sukun (مد بسبب السكون)",
                    definition: "A category of Madd that occurs when a Madd letter is followed by a letter with Sukoon.",
                    condition: "Occurs when a Madd letter (ا، و، ي) is followed by a silent letter (due to a permanent Sukoon or stopping).",
                    duration: "4 to 6 harakat depending on the type.",
                    example: {
                        0: "الحَاقَّةُ",
                        1: "الطَّامَّةُ",
                        2: "الصَّاخَّةُ",
                        3: "الضَّالِّينَ",
                        4: "الْجَانُّ",
                        5: "الصُّورِ",
                        6: "يَوْمَئِذٍ",
                        7: "الْمُصَيِّبَاتِ",
                        8: "الْمُفْلِحُونَ"
                    },
                    explanation: "This category includes Madd Lazim and Madd ‘Arid Lis-Sukun, where stopping or a natural Sukoon requires elongation."
                }, 
                parent: 2,
                children: {0:9, 1:10, 2:11, 3:12, 4:13} 
            },
            5: {                
                node: {
                    name: "Special Madds (المدود الخاصة)",
                    definition: "A group of non-standard Madd types that occur due to unique pronunciation rules in Tajweed.",
                    condition: "These types do not follow the general Madd rules but occur in specific cases.",
                    duration: "Varies depending on the type.",
                    example: {
                        0: "الْمُتَّكِئُونَ",
                        1: "لِلْمُصَلِّينَ",
                        2: "لِلَّذِينَ",
                        3: "يُرَآؤُنَ",
                        4: "وَسَيُجَنَّبُهَا",
                        5: "ذُو الْعَرْشِ",
                        6: "الْمَأْمُورِ",
                        7: "الْمُؤْمِنُونَ",
                        8: "الْمُسْتَقِيمَةِ"
                    },
                    explanation: "Includes Madds like Madd Farq, Madd Shabih bil ‘Arid, and Madd Zaid, which have unique recitation rules."
                }, 
                parent: 2,
                children: {0:14, 1:15, 2:16} 
            },
            6: {                
                node: {
                    name: "Madd Badal (مد بدل)",
                    definition: "Occurs when a Hamzah appears before a Madd letter in the same word.",
                    condition: "The Hamzah (ء) must precede a Madd letter (ا، و، ي) in a single word.",
                    duration: "2 harakat.",
                    example: {
                        0: "آمَنَ",
                        1: "إِيمَانًا",
                        2: "أُوتُوا",
                        3: "إِيمَانِهِمْ",
                        4: "آدَمَ",
                        5: "أُوذُوا",
                        6: "آخِرَةٌ",
                        7: "أُوذِيَ",
                        8: "إِيثَارًا"
                    },
                    explanation: "Unlike other Madds, Madd Badal is always pronounced with 2 harakat in Hafs recitation."
                }, 
                parent: 3,
                children: {} 
            },
            7: {                
                node: {
                    name: "Madd Muttasil (مد متصل)",
                    definition: "A necessary prolongation when a Madd letter is followed by a Hamzah in the same word.",
                    condition: "A Madd letter (ا، و، ي) is followed by a Hamzah (ء) in the same word.",
                    duration: "4 to 6 harakat.",
                    example: {
                        0: "السَّمَاءِ",
                        1: "جَاءَ",
                        2: "سَوَاءً",
                        3: "شَيْءٍ",
                        4: "إِسْرَائِيلَ",
                        5: "يَرَاءُونَ",
                        6: "أُولَئِكَ",
                        7: "جِيءَ",
                        8: "قُرُوءٍ"
                    },
                    explanation: "Since the Hamzah appears in the same word, the Madd is prolonged more than usual (4–6 harakat)."
                }, 
                parent: 3,
                children: {} 
            },
            8: {                
                node: {
                    name: "Madd Munfasil (مد منفصل)",
                    definition: "An elongation occurring when a Madd letter is at the end of a word and is followed by a Hamzah in the next word.",
                    condition: "A Madd letter (ا، و، ي) appears at the end of a word and is followed by a Hamzah (ء) in the next word.",
                    duration: "2 to 5 harakat (varies by recitation style).",
                    example: {
                        0: "بِمَا أُنْزِلَ",
                        1: "فِي أَنْفُسِكُمْ",
                        2: "قَالُوا آمَنَّا",
                        3: "قَدْ أَفْلَحَ",
                        4: "يَا أَيُّهَا",
                        5: "فِي أُذُنِهِ",
                        6: "يَا أَيُّهَا النَّاسُ",
                        7: "تَحْتَهَا أَنْهَارٌ",
                        8: "مِنَ السَّمَاءِ مَاءً"
                    },
                    explanation: "This Madd is optional in Hafs recitation, where elongation can be 2, 4, or 5 harakat."
                }, 
                parent: 3,
                children: {} 
            },            
            9: {                
                node: {
                    name: "Madd Lazim (مد لازم)",
                    definition: "A mandatory prolongation of a Madd letter followed by either a Mushaddad or a letter with an original Sukoon.",
                    condition: "Occurs when a Madd letter (ا، و، ي) is followed by a letter with a permanent Sukoon or a Shaddah.",
                    duration: "Must be prolonged for 6 harakat.",
                    example: {
                        0: "الضَّالِّينَ",
                        1: "الحَاقَّةُ",
                        2: "الطَّامَّةُ",
                        3: "الصَّاخَّةُ",
                        4: "أتحَاجُّونِي",
                        5: "الضُّحَى",
                        6: "الصَّيْحَةُ",
                        7: "الطُّوفَانُ",
                        8: "الطِّيبَاتِ"
                    },
                    explanation: "This is the strongest type of Madd and must be prolonged for 6 harakat in all cases."
                }, 
                parent: 4,
                children: {0:17, 1:18}
            },
            10: {                
                node: {
                    name: "Madd ‘Arid Lis-Sukun (مد عارض للسكون)",
                    definition: "A temporary prolongation when a Madd letter appears before a letter that becomes silent due to stopping.",
                    condition: "Occurs when a Madd letter is followed by a letter that is stopped upon with Sukoon.",
                    duration: "Can be prolonged for 2, 4, or 6 harakat.",
                    example: {
                        0: "العَالَمِينَ",
                        1: "الرَّحْمَٰنِ",
                        2: "الرَّحِيمِ",
                        3: "نَسْتَعِينُ",
                        4: "يَوْمِ الدِّينِ",
                        5: "الضَّالِّينَ",
                        6: "يَتَسَاءَلُونَ",
                        7: "الْمُفْلِحُونَ",
                        8: "الْغَافِرِينَ"
                    },
                    explanation: "Since stopping on a word makes the last letter silent, the Madd letter before it is extended for 2, 4, or 6 harakat."
                }, 
                parent: 4,
                children: {} 
            },
            11: {                
                node: {
                    name: "Madd Lin (مد لين)",
                    definition: "A type of Madd that occurs when a letter of Lin (و or ي with Sukoon) is followed by a letter that becomes silent due to stopping.",
                    condition: "Occurs when a letter of Lin (و or ي with Sukoon) is followed by a letter that becomes silent due to stopping.",
                    duration: "Can be prolonged for 2, 4, or 6 harakat.",
                    example: {
                        0: "قُرَيْشٍ",
                        1: "خَوْفٍ",
                        2: "بَيْتٍ",
                        3: "يَوْمٍ",
                        4: "اللَّيْلِ",
                        5: "حَوْلَ",
                        6: "سَوْفَ",
                        7: "الْبَيْنُ",
                        8: "مَوْتِ"
                    },
                    explanation: "This Madd is applied when stopping on a word containing a Lin letter, allowing elongation for 2, 4, or 6 harakat."
                }, 
                parent: 4,
                children: {} 
            },
            12: {                
                node: {
                    name: "Madd ‘Ardi (مد عرضي)",
                    definition: "A general term for Madd that occurs due to stopping (includes Madd ‘Arid Lis-Sukun and Madd Lin).",
                    condition: "Occurs when stopping on a word causes an elongation in the recitation.",
                    duration: "Can be prolonged for 2, 4, or 6 harakat.",
                    example: {
                        0: "الْمُفْلِحُونَ",
                        1: "الْمُصَلِّينَ",
                        2: "الْفَاسِقِينَ",
                        3: "الْجَاهِلِينَ",
                        4: "الْخَاطِئِينَ",
                        5: "الضَّالِّينَ",
                        6: "الظَّالِمِينَ",
                        7: "الْمُتَّقِينَ",
                        8: "الْكَافِرِينَ"
                    },
                    explanation: "This Madd is a broad category that includes cases where stopping on a word causes elongation."
                }, 
                parent: 4,
                children: {} 
            },
            13: {                
                node: {
                    name: "Madd Yaz (مد ياز)",
                    definition: "A term not commonly used in traditional Tajweed classifications, but sometimes refers to an extra elongation in recitation.",
                    condition: "Occurs in specific recitation styles where certain words are elongated for clarity or emphasis.",
                    duration: "Varies depending on the style of recitation.",
                    example: {
                        0: "يَسۤ",
                        1: "طه",
                        2: "حم",
                        3: "الم",
                        4: "الر",
                        5: "كهيعص",
                        6: "المص",
                        7: "ن والقلم",
                        8: "قٓ والقرآن"
                    },
                    explanation: "This type of Madd is applied in specific cases in recitation styles, particularly with the Quranic initials."
                }, 
                parent: 4,
                children: {} 
            },            
            14: {                
                node: {
                    name: "Madd Farq (مد فرق)",
                    definition: "A type of Madd that occurs due to Hamzatul Wasl (همزة الوصل) at the beginning of an interrogative phrase, making it necessary to differentiate the meaning.",
                    condition: "Occurs when an interrogative Hamzah (أ) precedes a word that starts with Hamzatul Wasl (ٱ).",
                    duration: "Must be prolonged for 6 harakat.",
                    example: {
                        0: "ءَآلْهَةٌ",
                        1: "ءَآللَّهُ",
                        2: "ءَآلذَّكَرَيْنِ",
                        3: "ءَآلْآنَ",
                        4: "ءَآللَّهُ خَيْرٌ",
                        5: "ءَآللَّهُ رَبُّكُمْ",
                        6: "ءَآللَّهُ يُرِيدُ",
                        7: "ءَآللَّهُ أَذِنَ",
                        8: "ءَآللَّهُ عَظِيمٌ"
                    },
                    explanation: "The elongation occurs because the two Hamzahs meet, requiring the extension of the Madd letter to differentiate the interrogative meaning from the affirmative statement."
                }, 
                parent: 5,
                children: {} 
            },
            15: {                
                node: {
                    name: "Madd Shabih bil ‘Arid (مد شبيه بالعرض للسكون)",
                    definition: "A Madd that resembles Madd ‘Arid Lissukoon but does not fully meet its conditions.",
                    condition: "Occurs when a Madd letter is followed by a letter with an original Sukoon that is not affected by stopping.",
                    duration: "Prolonged for 2, 4, or 6 harakat.",
                    example: {
                        0: "يَتَوَفَّاكُمْ مَلَكُ الْمَوْتِ",
                        1: "وَقَالَ الَّذِينَ كَفَرُوا",
                        2: "وَيَسْتَفْتُونَكَ",
                        3: "إِنَّهُ لَقَوْلٌ فَصْلٌ",
                        4: "مَالِكِ يَوْمِ الدِّينِ",
                        5: "وَمَا خَلَقَ الذَّكَرَ وَالْأُنثَى",
                        6: "وَلِلَّهِ الْأَمْرُ",
                        7: "الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ",
                        8: "يَوْمَ نَقُولُ لِجَهَنَّمَ"
                    },
                    explanation: "This Madd is similar to Madd ‘Arid Lissukoon because of the stopping condition but does not fully qualify as ‘Arid since the Sukoon is part of the word's original structure."
                }, 
                parent: 5,
                children: {} 
            },
            16: {                
                node: {
                    name: "Madd Zaid (مد زائد)",
                    definition: "A type of Madd where an extra elongation is applied due to the presence of certain grammatical structures.",
                    condition: "Occurs when a word has additional elongation due to special conditions, such as emphasis or linguistic factors.",
                    duration: "Prolonged for 2, 4, or 6 harakat depending on recitation style.",
                    example: {
                        0: "وَالسَّمَاءِ وَالطَّارِقِ",
                        1: "اللَّهُ لَا إِلَٰهَ إِلَّا هُوَ",
                        2: "فَمَا لَهُمْ عَنِ التَّذْكِرَةِ مُعْرِضِينَ",
                        3: "وَالنَّازِعَاتِ غَرْقًا",
                        4: "وَالسَّابِقَاتِ سَبْقًا",
                        5: "وَالسَّمَاءِ ذَاتِ الرَّجْعِ",
                        6: "فَإِذَا نُقِرَ فِي النَّاقُورِ",
                        7: "إِنَّ الْمُتَّقِينَ فِي جَنَّاتٍ وَنَهَرٍ",
                        8: "لَا يَسْمَعُونَ فِيهَا لَغْوًا وَلَا تَأْثِيمًا"
                    },
                    explanation: "The extra elongation comes from factors such as phonetic emphasis, special grammatical structures, or stylistic elements in Tajweed."
                }, 
                parent: 5,
                children: {} 
            },
            17: {                
                node: {
                    name: "Madd Lazim Kalimi (مد لازم كلمي)",
                    definition: "A type of Madd Lazim that occurs within a word when a Madd letter is followed by either a Mushaddad or a Sakoon.",
                    condition: "Occurs when a Madd letter is followed by a Shaddah or a permanent Sukoon in the same word.",
                    duration: "Must be prolonged for 6 harakat.",
                    example: {
                        0: "الضَّالِّينَ",
                        1: "الصَّاخَّةُ",
                        2: "الطَّامَّةُ",
                        3: "الحَاقَّةُ",
                        4: "أتحَاجُّونِي",
                        5: "الصَّيْحَةُ",
                        6: "الطُّوفَانُ",
                        7: "الضُّحَى",
                        8: "الطِّيبَاتِ"
                    },
                    explanation: "Since a Madd letter is followed by a Mushaddad or Sukoon, it is necessary to extend it for 6 harakat."
                }, 
                parent: 9,
                children: {0:19, 1:20} 
            },
            18: {                
                node: {
                    name: "Madd Lazim Harfi (مد لازم حرفي)",
                    definition: "A type of Madd Lazim that occurs in the Quranic initials (Huroof Muqatta’ah) where a Madd letter is followed by either a Mushaddad or a Sakoon.",
                    condition: "Occurs in the beginning letters of Surahs where the letter with Madd is followed by a silent or Mushaddad letter.",
                    duration: "Must be prolonged for 6 harakat.",
                    example: {
                        0: "الم",
                        1: "المر",
                        2: "طسم",
                        3: "كهيعص",
                        4: "حم عسق",
                        5: "المص",
                        6: "الر",
                        7: "يس",
                        8: "ص"
                    },
                    explanation: "Since the Madd letter in the Quranic initials is followed by either a Mushaddad or a silent letter, it must be prolonged for 6 harakat."
                }, 
                parent: 9,
                children: {0:21, 1:22} 
            },            
            19: {                
                node: {
                    name: "Madd Lazim Kalimi Mushaddad (مد لازم كلمي مثقل)",
                    definition: "A type of Madd Lazim where a letter with a Madd is followed by a Mushaddad letter within a single word.",
                    condition: "Occurs when a Madd letter is followed by a Shaddah ( ّ ) in the same word.",
                    duration: "Must be prolonged for 6 harakat.",
                    example: {
                        0: "الضَّالِّينَ",
                        1: "الصَّاخَّةُ",
                        2: "الطَّامَّةُ",
                        3: "الحَاقَّةُ",
                        4: "أتحَاجُّونِي",
                        5: "الصَّيْحَةُ",
                        6: "الطُّوفَانُ",
                        7: "الضُّحَى",
                        8: "الطِّيبَاتِ"
                    },
                    explanation: "The Madd occurs because the letter before the Shaddah has a Madd, making it necessary to extend it for 6 harakat."
                }, 
                parent: 17,
                children: {} 
            },
            20: {                
                node: {
                    name: "Madd Lazim Kalimi Mukhaffaf (مد لازم كلمي مخفف)",
                    definition: "A type of Madd Lazim where a Madd letter is followed by a Sukoon within a single word, without a Shaddah.",
                    condition: "Occurs when a Madd letter is followed by a Sukoon ( ْ ) in the same word.",
                    duration: "Must be prolonged for 6 harakat.",
                    example: {
                        0: "ءَآلْـٰٔنَ",
                        1: "ءَآلْـٰٔنَ وَقَدْ كُنتُم",
                        2: "ءَآلْـٰٔنَ وَقَدْ عَصَيْتَ",
                        3: "ءَآلْـٰٔنَ أَنْتَ",
                        4: "ءَآلْـٰٔنَ فَإِنَّ",
                        5: "ءَآلْـٰٔنَ أَنَا",
                        6: "ءَآلْـٰٔنَ وَقَدْ",
                        7: "ءَآلْـٰٔنَ كُنتَ",
                        8: "ءَآلْـٰٔنَ مَعِي"
                    },
                    explanation: "This type is extremely rare in the Quran, appearing only in the word (ءَآلْـٰٔنَ). The Madd is extended because of the sukoon following the Madd letter."
                }, 
                parent: 17,
                children: {} 
            },
            21: {                
                node: {
                    name: "Madd Lazim Harfi Mushaddad (مد لازم حرفي مثقل)",
                    definition: "A type of Madd Lazim that occurs in certain Quranic initials (Huroof Muqatta’ah) where a Madd letter is followed by a Mushaddad letter.",
                    condition: "Occurs in the opening letters of Surahs, where a letter with Madd is followed by a Shaddah.",
                    duration: "Must be prolonged for 6 harakat.",
                    example: {
                        0: "الم",
                        1: "المر",
                        2: "طسم",
                        3: "كهيعص",
                        4: "حم عسق",
                        5: "المص",
                        6: "الر",
                        7: "يس",
                        8: "ص"
                    },
                    explanation: "The elongation occurs because the individual letters in the Quranic initials contain Madd letters followed by a Mushaddad letter."
                }, 
                parent: 18,
                children: {} 
            },
            22: {                
                node: {
                    name: "Madd Lazim Harfi Mukhaffaf (مد لازم حرفي مخفف)",
                    definition: "A type of Madd Lazim that occurs in certain Quranic initials (Huroof Muqatta’ah) where a Madd letter is followed by a Sukoon, without a Shaddah.",
                    condition: "Occurs in the opening letters of Surahs, where a letter with Madd is followed by a silent letter.",
                    duration: "Must be prolonged for 6 harakat.",
                    example: {
                        0: "ق",
                        1: "ن",
                        2: "ص",
                        3: "الر",
                        4: "الم",
                        5: "طس",
                        6: "حم",
                        7: "كهيعص",
                        8: "يس"
                    },
                    explanation: "The elongation occurs because the individual letters in the Quranic initials contain Madd letters followed by a silent letter (sukoon), making it necessary to prolong them for 6 harakat."
                }, 
                parent: 18,
                children: {} 
            }            
            
        };        
        
    }

    toJsonString()
    {
        return JSON.stringify(this.data);
    }

    getData(index) 
    {
        return this.data[index] || null;
    }
}

var data = new Data();
var jstring = JSON.stringify(data.data);
console.log(jstring);