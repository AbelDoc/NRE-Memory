cmake_minimum_required(VERSION 3.15)
project(NRE_Memory)

set(CMAKE_CXX_STANDARD 20)
set (CMAKE_CXX_FLAGS "${CMAKE_CXX_FLAGS} -DNRE_USE_MEMORY_MANAGER -pedantic -Wno-virtual-move-assign -Wall -Wextra -Wfatal-errors -Wfloat-equal -Wstrict-overflow -Wshadow -Wconversion -Wunreachable-code -Wuninitialized -Winit-self -Werror -fstrict-overflow -std=c++20")

include_directories(C:/Users/abell/Documents/GitHub/NRE-Core/src)

include_directories(src)
include_directories(src/Header)
include_directories(src/Memory)
include_directories(src/Memory/Allocator)
include_directories(src/Memory/Manager)

set(COMPILE_LIST)

set(EXEC_LIST
        ${COMPILE_LIST}
        src/NRE_Main.cpp)

add_executable(NRE_Memory ${EXEC_LIST})